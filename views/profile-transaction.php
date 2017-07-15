 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ACCESS  |  Transaction History</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-access.ico">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  
    <!-- CSS -->
    <link href ="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbardark.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/profile-transaction.css">    

  </head>

<body>

<div class="profile-header">
    <div class="row">
        <div class="col-md-12">
            
        </div>
    </div>
</div>



<div class="transaction-history">
  <div class="container-fluid">
    <div class="transaction-container"> 
        <div class="col-md-12">
          <div class="title">
            <h1>Transaction History</h1>
          </div>
          <div class="details">
            <table align="center">
              <tr>
                <th></th>
                <th>Date</th>
                <th>Transaction Id</th>
                <th>Transaction Description</th>
                <th>Admin</th>
                <th>Assessment</th>
                <th>Payment</th>
              </tr>
              <?php

                $i = 0; 
                $assess = 0;
                $payment = 0;
                $balance = 0;

                foreach($transaction as $row):

              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row->dateAdded; ?></td>
                <td><?php echo $row->transactionID; ?></td>
                <td><?php echo $row->transactionDescription; ?></td>
                <td><?php echo $row->username; ?></td>
                <td><?php echo $row->assessment; ?></td>
                <td><?php echo $row->payment; ?></td>
              </tr>
                <?php 
                $assess = $assess + $row->assessment;
                $payment = $payment + $row->payment;
                $balance = $assess - $payment;
                ?>
                <?php $i++; endforeach; ?>
              <tr>
                <td colspan="5" align="right"><b>Total:<b></td>
                <td><?php echo number_format((float)$assess, 2, '.', ''); ?></td>
                <td><?php echo number_format((float)$payment, 2, '.', ''); ?></td>
              </tr>
            </table>
          <div class="balance">
            <p><b>Total Balance: </b>P <?php echo number_format((float)$balance, 2, '.', ''); ?></p>
          </div>
          </div>
          <div class="clearance">
            <p><?php if($balance > 0) echo 'Please settle your balance P'. number_format((float)$balance, 2, '.', '') .' at Access before the start of the next sem to avoid encountering problems in your clearance';
                     else echo 'YOU HAVE CURRENTLY NO DEFFICIENCY IN ACCESS!'; ?></p>
          </div>
      </div>
    </div>
  </div>
</div>

