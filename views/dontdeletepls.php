<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Sample</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form method="post" action="<?php echo base_url() . 'tester/search_something'; ?>">
    <h1 align="center">Search Something!</h1>
    <h3 align="center"><?php echo $total . ' ' ?>Results</h3>
    <div class="row">
      <div class="col-md-11">
        <div class="form-group">
          <input type="text" class="form-control" id="search" name="search" value="<?php echo set_value('search'); ?>" placeholder="Search something...">
        </div>
      </div>
      <div class="col-md-1">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
  <br><br>
  <div class="results">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Person</th>
          <th>Job Title</th>
          <th>Report</th>
        </tr>
      </thead>
      <tbody>
        <?php for($i=0; $i < count($results); ++$i){ ?>
          <tr>
            <td><?php echo $results[$i]->person_title . ' ' . $results[$i]->first_name; ?></td>
            <td><?php echo $results[$i]->job_title; ?></td>
            <td><?php echo $results[$i]->details; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <br><br><br>
  <?php echo $links; ?>
</div>

</body>
</html>

