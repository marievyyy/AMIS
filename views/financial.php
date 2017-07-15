 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');

    $now = new DateTime('now');
    $month = $now->format('m');
    $year = $now->format('Y');

    if($month == 11 || $month == 12) {
        $pastCaption = 'First Semester SY ' . $year . '-' . ($year+1);
        $presentCaption = 'Second Semester SY ' . $year . '-' . ($year+1);
    } else if ($month == 6 || $month == 7 || $month == 8 || $month == 9 || $month == 10) {
        $pastCaption = 'Second Semester SY ' . ($year-1) . '-' . $year;
        $presentCaption = 'First Semester SY ' . $year . '-' . ($year+1);
    } else if ($month == 1 || $month == 2 || $month == 3 || $month == 4 || $month == 5) {
        $pastCaption = 'First Semester SY ' . ($year-1) . '-' . $year;
        $presentCaption = 'Second Semester SY ' . ($year-1) . '-' . $year;
    }

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ACCESS  |  Financial History</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-access.ico">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  
    <!-- CSS -->
    <link href ="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbardark.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/financial.css">    

  </head>

<body>

<div class="financial-header">
    <div class="row">
        <div class="col-md-12">
            
        </div>
    </div>
</div>

<div class="financial-history">
  <div class="container-fluid">
    <div class="financial-container"> 
        <div class="col-md-12">
          <div class="title">
            <h1>Financial Report</h1>
          </div>
          <div class="firstSem">
            <h3><?php echo $presentCaption; ?></h3>
            <table class="cashIn">
              <tr>
                <th colspan="2">Cash In</th>
              </tr>
              <?php $presentHistoryCashInTotal = 0; $presentOtherCashInTotal = 0; ?>
              <?php foreach($presentHistoryCashIn as $rows): ?>
                <?php if($rows->total > 0): ?>
                  <tr>
                    <td><?php echo $rows->transactionDescription; ?></td>
                    <td><?php echo 'P ' . number_format($rows->total, 2, '.', ','); ?></td>
                  </tr>
                <?php endif; ?>
              <?php $presentHistoryCashInTotal = $presentHistoryCashInTotal + $rows->total; ?>
              <?php endforeach; ?>
              <?php foreach($presentOtherCashIn as $row): ?>
                <?php if($row->total > 0): ?>
                  <tr>
                    <td><?php echo $row->otherTransactionDescription; ?></td>
                    <td><?php echo 'P ' . number_format($row->total, 2, '.', ','); ?></td>
                  </tr>
                <?php endif; ?>
              <?php $presentOtherCashInTotal = $presentOtherCashInTotal + $row->total; ?>
              <?php endforeach; ?>
              <tr>
                <td><b>Total<b></td>
                <td><b><?php echo 'P ' . number_format($presentHistoryCashInTotal + $presentOtherCashInTotal, 2, '.', ','); ?><b></td>
              </tr>
            </table>
            <table class="cashIn">
              <tr>
                <th colspan="2">Cash Out</th>
              </tr>
              <?php $presentCashOutTotal = 0; ?>
              <?php foreach($presentCashOut as $row): ?>
                  <tr>
                    <td><?php echo $row->outFlowType; ?></td>
                    <td><?php echo 'P ' . number_format($row->total, 2, '.', ','); ?></td>
                  </tr>
              <?php $presentCashOutTotal = $presentCashOutTotal + $row->total; ?>
              <?php endforeach; ?>
              <tr>
                <td><b>Total<b></td>
                <td><b><?php echo 'P ' . number_format($presentCashOutTotal, 2, '.', ','); ?><b></td>
              </tr>
            </table>
          </div>

          <div class="secondSem">
            <h3><?php echo $pastCaption; ?></h3>
            <table class="cashIn">
              <tr>
                <th colspan="2">Cash In</th>
              </tr>
              <?php $pastHistoryCashInTotal = 0; $pastOtherCashInTotal = 0; ?>
              <?php foreach($pastHistoryCashIn as $rows): ?>
                <?php if($rows->total > 0): ?>
                  <tr>
                    <td><?php echo $rows->transactionDescription; ?></td>
                    <td><?php echo 'P ' . number_format($rows->total, 2, '.', ','); ?></td>
                  </tr>
                <?php endif; ?>
              <?php $pastHistoryCashInTotal = $pastHistoryCashInTotal + $rows->total; ?>
              <?php endforeach; ?>
              <?php foreach($pastOtherCashIn as $row): ?>
                <?php if($row->total > 0): ?>
                  <tr>
                    <td><?php echo $row->otherTransactionDescription; ?></td>
                    <td><?php echo 'P ' . number_format($row->total, 2, '.', ','); ?></td>
                  </tr>
                <?php endif; ?>
              <?php $pastOtherCashInTotal = $pastOtherCashInTotal + $row->total; ?>
              <?php endforeach; ?>
              <tr>
                <td><b>Total<b></td>
                <td><b><?php echo 'P ' . number_format($pastHistoryCashInTotal + $pastOtherCashInTotal, 2, '.', ','); ?><b></td>
              </tr>
            </table>
            <table class="cashIn">
              <tr>
                <th colspan="2">Cash Out</th>
              </tr>
              <?php $pastCashOutTotal = 0; ?>
              <?php foreach($pastCashOut as $row): ?>
                  <tr>
                    <td><?php echo $row->outFlowType; ?></td>
                    <td><?php echo 'P ' . number_format($row->total, 2, '.', ','); ?></td>
                  </tr>
              <?php $pastCashOutTotal = $pastCashOutTotal + $row->total; ?>
              <?php endforeach; ?>
              <tr>
                <td><b>Total<b></td>
                <td><b><?php echo 'P ' . number_format($pastCashOutTotal, 2, '.', ','); ?><b></td>
              </tr>
            </table>
          </div>
      </div>
    </div>
  </div>
</div>

