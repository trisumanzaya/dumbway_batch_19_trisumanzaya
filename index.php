<?php
require 'functions.php';
$courses = query("select c.name as name_course, c.duration , a.name as name_author, c.deskription , c.thumbnail from course c left join author a on a.id = c.id_author");

if (isset($_POST["submit-author"])) {
  $author = $_POST['author'];

  insertAuthor($author);
}

if (isset($_POST["submit-course"])) {

  insertCourse($_POST);
}

if (isset($_POST["submit-content"])) {

  insertContent($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="d-flex flex-row justify-content-between" style="margin-bottom: 100px">
      <div>
        <h1>Dumb-Course</h1>
      </div>
      <div class="mt-2">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCourse">Add Course</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAuthor">Add Author</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalContent">Add Content</button>
      </div>
    </div>
  </div>
  <div class="d-flex flex-row flex-wrap justify-content-around">

    <?php $i = 1; ?>
    <?php foreach ($courses as $course) : ?>

      <div class="card mb-4" style="width: 18rem">
        <img src=<?= $course['thumbnail']; ?> class="card-img-top" alt="img">
        <div class="card-body">
          <div class="d-flex flex-row justify-content-between">
            <h5 class="card-title"><?= $course['name_course']; ?></h5>
            <p><?= $course['name_author']; ?></p>
          </div>
          <p class="card-text"><?= $course['deskription']; ?></p>
          <a href="#" class="btn btn-primary w-100">Detail</a>
        </div>
      </div>

      <?php $i++; ?>
    <?php endforeach; ?>
  </div>

  <!-- Modal Course -->
  <div class="modal fade" id="modalCourse" tabindex="-1" role="dialog" aria-labelledby="modalCourse" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form class="modal-content" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Name</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="name">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Thumbnail</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="thumbnail">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Id Author</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="id_author">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Duration</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="duration">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Deskripsi</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="deskription">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit-course">Save changes</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modal Author -->
  <div class="modal fade" id="modalAuthor" tabindex="-1" role="dialog" aria-labelledby="modalAuthor" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form class="modal-content" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Author</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Author</span>
            </div>
            <input type="text" class="form-control" placeholder="Author" aria-label="Username" aria-describedby="basic-addon1" name="author" id="author">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit-author">Save changes</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modal Content -->
  <div class="modal fade" id="modalContent" tabindex="-1" role="dialog" aria-labelledby="modalContent" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form class="modal-content" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Content</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">name</span>
            </div>
            <input type="text" class="form-control" placeholder="Author" aria-label="Username" aria-describedby="basic-addon1" name="name">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">video link</span>
            </div>
            <input type="text" class="form-control" placeholder="Author" aria-label="Username" aria-describedby="basic-addon1" name="vidio_link">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">type</span>
            </div>
            <input type="text" class="form-control" placeholder="Author" aria-label="Username" aria-describedby="basic-addon1" name="type">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Id Course</span>
            </div>
            <input type="text" class="form-control" placeholder="Author" aria-label="Username" aria-describedby="basic-addon1" name="id_course">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit-content">Save changes</button>
        </div>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>