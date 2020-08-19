<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>e-rapat - Fullcalendar</title>
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.42/css/bootstrap-datetimepicker.min.css'><link rel="stylesheet" href="./style.css">

<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css' rel='stylesheet' media='print' />

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="row">
  



<div id="contextMenu" class="dropdown clearfix">

</div>

<div class="panel panel-default hidden-print">
  <div class="panel-heading">
    <h3 class="panel-title">Pengaturan Tampilan kalender</h3>
  </div>
  <div class="panel-body">

<div class="col-lg-2">
<div class="form-group">
  <label for="calendar_view">View Mode</label>
  <select class="form-control" id="calendar_view">
      <option value="month">Bulan</option>
      <option value="agendaWeek">Minggu</option>
      <option value="agendaDay">Hari</option>
      <option value="listWeek">List</option>
    </select>
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
  <label for="calendar_start_time">Jam Awal Rapat :</label>
  <select class="form-control" id="calendar_start_time">
    <option value="01:00:00">01:00 AM</option>
    <option value="02:00:00">02:00 AM</option>
    <option value="03:00:00">03:00 AM</option>
    <option value="04:00:00">04:00 AM</option>
    <option value="05:00:00">05:00 AM</option>
    <option value="06:00:00">06:00 AM</option>
    <option value="07:00:00">07:00 AM</option>
    <option value="08:00:00">08:00 AM</option>
    <option value="09:00:00">09:00 AM</option>
    <option value="10:00:00">10:00 AM</option>
    <option value="11:00:00">11:00 AM</option>
    <option value="12:00:00">12:00 PM</option>
    <option value="13:00:00">13:00 PM</option>
    <option value="14:00:00">14:00 PM</option>
    <option value="15:00:00">15:00 PM</option>
    <option value="16:00:00">16:00 PM</option>
    <option value="17:00:00">17:00 PM</option>
    <option value="18:00:00">18:00 PM</option>
    <option value="19:00:00">19:00 PM</option>
    <option value="20:00:00">20:00 PM</option>
    <option value="21:00:00">21:00 PM</option>
    <option value="22:00:00">22:00 PM</option>
    <option value="23:00:00">23:00 PM</option>    
  </select>
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
  <label for="calendar_end_time">Jam Akhir Rapat :</label>
  <select class="form-control" id="calendar_end_time">
    <option value="01:00:00">01:00 AM</option>
    <option value="02:00:00">02:00 AM</option>
    <option value="03:00:00">03:00 AM</option>
    <option value="04:00:00">04:00 AM</option>
    <option value="05:00:00">05:00 AM</option>
    <option value="06:00:00">06:00 AM</option>
    <option value="07:00:00">07:00 AM</option>
    <option value="08:00:00">08:00 AM</option>
    <option value="09:00:00">09:00 AM</option>
    <option value="10:00:00">10:00 AM</option>
    <option value="11:00:00">11:00 AM</option>
    <option value="12:00:00">12:00 PM</option>
    <option value="13:00:00">13:00 PM</option>
    <option value="14:00:00">14:00 PM</option>
    <option value="15:00:00">15:00 PM</option>
    <option value="16:00:00">16:00 PM</option>
    <option value="17:00:00">17:00 PM</option>
    <option value="18:00:00">18:00 PM</option>
    <option value="19:00:00">19:00 PM</option>
    <option value="20:00:00">20:00 PM</option>
    <option value="21:00:00">21:00 PM</option>
    <option value="22:00:00">22:00 PM</option>
    <option value="23:00:00">23:00 PM</option> 
  </select>
</div>
</div>

<div class="col-lg-2">
    
<div class="form-group">
  <label for="ShowWeekends">Munculkan/Sembunyikan Akhir Pekan</label>
  <div class="input-group">
  <input class='showHideWeekend' type="checkbox" checked>
    </div>
</div>
</div>
    
  </div>
</div>


<div class="panel panel-default hidden-print">
  <div class="panel-heading">
    <h3 class="panel-title">Filter Calendar (Users, Calendar and Eventy Type)</h3>
  </div>
  <div class="panel-body">
    
    <div class="col-lg-10">
  
  <label for="calendar_view">Filter By Unit Kerja</label>
  <div class="input-group">
      <select class="filter" id="type_filter" multiple="multiple">
<!--         <option value="Appointment">Appointment</option>
        <option value="Check-in">Check-in</option>
        <option value="Checkout">Checkout</option>
        <option value="Inventory">Inventory</option>
        <option value="Valuation">Valuation</option>
        <option value="Viewing">Viewing</option> -->
        <option value='all'>Semua Bidang Department</option>
        <option value='1'>Bidang Pelaporan dan Evaluasi Puslitbang Transportasi Udara</option>
        <option value='2'>Bagian Keuangan dan Perlengkapan</option>
        <option value='3'>Bidang Pelaporan dan Evaluasi Puslitbang Transportasi Jalan dan Perkertaapian</option>
        <option value='4'>Bagian Kepegawaian</option>
        <option value='5'>Bagian Data Humas dan Publikasi</option>
      </select>
    </div>
</div>
    
    <div class="col-lg-2">
  <label for="calendar_view">Filter Berdasarkan Tipe Media</label>
  <div class="input-group">
      <label class="checkbox-inline"><input class='filter' type="checkbox" value="Online" checked>Online</label>
      <label class="checkbox-inline"><input class='filter' type="checkbox" value="Offline" checked>Offline</label>
  </div>
</div>
    
  </div>
</div>

        <div id="wrapper">
            <div id="loading"></div>
            <div class="print-visible" id="calendar"></div>
        </div>      
      
      <!-- DETAIL EVENT MODAL -->
      
      <div class="modal fade" tabindex="-1" role="dialog" id="editEventModal" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Details Meeting Pukul <span class="eventDate"></span></h4>
            </div>
            <div class="modal-body">
              
                
          
          <div class="row">
                <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="title">Event title</label>
                        <input class="inputModal" disabled id="editTitle" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="starts-at">Starts at</label>
                        <input class="inputModal" disabled id="editStartDate" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="ends-at">Ends at</label>
                        <input class="inputModal" disabled id="editEndDate" />
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="edit-calendar-type">Calendar</label>
                        <select class="inputModal" type="text" name="edit-calendar-type" id="edit-calendar-type">
                          <option value="Sales">Sales</option>
                          <option value="Lettings">Lettings</option>
                        </select>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="edit-event-desc">Description</label>
                        <textarea rows="4" cols="50" class="inputModal" disabled id="edit-event-desc"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
      
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCit4RJVPT9UiLQCJJPYEBkNTJCslqO4ps&libraries=places"></script>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale-all.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/id.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js'></script><script  src="./script.js"></script>

</body>
</html>
