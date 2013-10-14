<?php

//App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
include_once '../Lib/Database.php';

class EmailController extends AppController {

    var $components = array('Email');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->db = new Database();
    }

    public function sendMail($sender = null, $message = null) {
        if (!isset($sender) || !isset($message)) {
            $this->Email->subject = 'Your Hall Reservation Reminder';
            $today = date("Y-m-d");
            $realDay = date("Y-m-d", strtotime($today . "+2 days"));
            $sql1 = "SELECT rID FROM reservation WHERE date = ? ";
            $query1 = $this->db->prepare($sql1);
            $result1 = $query1->execute(array($realDay));
            while ($item1 = $query1->fetch(PDO::FETCH_ASSOC)) {
                $selRID = $item1['rID'];
                $sql2 = "SELECT uID FROM reservation WHERE rID = ? ";
                $query2 = $this->db->prepare($sql2);
                $result2 = $query2->execute(array($selRID));
                while ($item2 = $query2->fetch(PDO::FETCH_ASSOC)) {
                    $uID = $item2['uID'];
                    $sql3 = "SELECT email FROM users WHERE uID = ? ";
                    $query3 = $this->db->prepare($sql3);
                    $result3 = $query3->execute(array($uID));
                    while ($item3 = $query3->fetch(PDO::FETCH_ASSOC)) {
                        $sender = $item3['email'];
                        $sql4 = "SELECT begin_time, begin_meridiem, end_time, end_meridiem, description, hID FROM reservation WHERE rID = ? ";
                        $query4 = $this->db->prepare($sql4);
                        $result4 = $query4->execute(array($selRID));
                        while ($item4 = $query4->fetch(PDO::FETCH_ASSOC)) {
                            $begin = $item4['begin_time'] . " " . $item4['begin_meridiem'];
                            $end = $item4['end_time'] . " " . $item4['end_meridiem'];
                            $description = $item4['description'];
                            $hall = $item4['hID'];
                            $message = "Dear Sir/Madam,
                                        You have a reservation on '$realDay' from '$begin' to '$end' in hall number '$hall'.
                                        Your reservation purpose indicated as '$description'.
                                        Thank You.
                                        ";
                            $this->Email->from = 'dananji@rocketmail.com';
                            $this->Email->to = $sender;
                            $this->Session->write('sender', $sender);
                            $this->Session->write('receiver', 'admin@admin.com');
                            $this->Session->write('message', $message);
                            $this->Email->delivery = 'debug';
                            if ($this->Email->send($message)) {
                                $sent = true;
                                $sql5 = "UPDATE reservation SET mail_sent = true WHERE rID = ? ";
                                $query5 = $this->db->prepare($sql5);
                                $result5 = $query5->execute(array($selRID));
                            }
                        }
                    }
                }
            }
        } else {
            $this->Session->write('sender', 'admin@admin.com');
            $this->Session->write('receiver', $sender);
            $this->Session->write('message', $message);
            $this->Session->write('sent', $sent);
        }

        /* Configuration for sending emails, using gmail smtp server for the real time application */
        /* $this->Email->smtpOptions = array(
          'port' => '465',
          'timeout' => '30',
          'host' => 'ssl://smtp.gmail.com',
          'username' => 'dan9131@gmail.com',
          'password' => 'Password',
          );
          $this->Email->delivery = 'smtp';
          if ($this->Email->send($message)) {
          return true;
          } else {
          echo $this->Email->smtpError;
          } */
    }

    public function success() {
        
    }

}

?>