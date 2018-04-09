<!-- <!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conservancy land parcels</title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="<?php echo base_url('assests/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet"> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 <!--  </head>
  <body> --> 


  <div class="container" style="background:#ffffff">
    <h1></h1>
</center>
    <h3>SIANA LAND PARCELS</h3>
    <br />
    <button class="btn btn-danger" onclick="add_book()"><i class="glyphicon glyphicon-plus"></i> Add Conservancy</button>
    <br />
    <br />
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Parcel No</th>
          <th>Name</th>
          <th>Location</th>
          <th>Ha</th>
          <th>Acres</th>

          <th style="width:85px;">Action
          </p></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($siana as $siana){?>
             <tr>
                 <td><?php echo $siana->PARNO;?></td>
                 <td><?php echo $siana->NAME;?></td>
                 <td><?php echo $siana->Location;?></td>
                <td><?php echo $siana->HA;?></td>
                <td><?php echo $siana->A;?></td>
                <td>
                  <button class="btn btn-warning" onclick="edit_book(<?php echo $siana->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
               <!--    <button class="btn btn-danger" onclick="delete_book(<?php echo $book->id;?>)"><i class="glyphicon glyphicon-remove"></i></button>

 -->
                </td>
              </tr>
             <?php }?>



      </tbody>

      <tfoot>
        <tr>
          <th>Parcel No</th>
          <th>Name</th>
          <th>Location</th>
          <th>HA</th>
          <th>Acres</th>
        </tr>
      </tfoot>
    </table>

  </div>

 <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>

  <script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
    var save_method; //for save method string
    var table;


    function add_book()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_book(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('siana/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.id);
            $('[name="PARNO"]').val(data.PARNO);
            $('[name="NAME"]').val(data.NAME);
            $('[name="Location"]').val(data.Location);
            $('[name="HA"]').val(data.HA);
            $('[name="Acres"]').val(data.A);



            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Conservancy'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }



    function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('siana/book_add')?>";
      }
      else
      {
        url = "<?php echo site_url('siana/book_update')?>";
      }

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
               alert('Error adding / update data');
                //alert(data);
            }
        });
    }

    function delete_book(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('index.php/siana/book_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

      }
    }

  </script>

  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Add Conservancy</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Parcel No</label>
              <div class="col-md-9">
                <input name="PARNO" placeholder="Parcel No" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Name</label>
              <div class="col-md-9">
                <input name="NAME" placeholder="Name" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Ha</label>
              <div class="col-md-9">
                <input name="HA" placeholder="Ha" class="form-control" type="text">

              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Acres</label>
              <div class="col-md-9">
                <input name="Acres" placeholder="Acres" class="form-control" type="text">

              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Location</label>
              <div class="col-md-9">
                <input name="Location" placeholder="Location" class="form-control" type="text">

              </div>
            </div>

          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->

  </body>
</html>