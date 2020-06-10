
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2019 &copy; PEMOGRAMAN WEB 1.0
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo $base_url ;?>asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $base_url ;?>asset/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo $base_url ;?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $base_url ;?>asset/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo $base_url ;?>asset/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo $base_url ;?>asset/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo $base_url ;?>asset/js/charts-home.js"></script>
    <script src="<?php echo $base_url ;?>asset/js/front.js"></script>
    <script src="<?php echo $base_url ;?>asset/dist/summernote.js"></script>
   <script>
      $('#summernote').summernote({
        placeholder: 'Ketik Artikel Disini',
        tabsize: 2,
        height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true                  // set focus to editable area after initializing summernote
      });
    </script>

<script type="text/javascript" src="<?php echo $base_url ;?>asset/dist/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url ;?>asset/dist/datatables.net/js/jquery.dataTables.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>

  </body>
</html>