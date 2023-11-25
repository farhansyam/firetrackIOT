@extends('layouts.pwa')

@section('content')
 <!-- Preloader -->
 <div id="preloader">
      <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
    </div>
    <!-- Internet Connection Status -->
    <!-- # This code for showing internet connection status -->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Dark mode switching -->
    <!-- RTL mode switching -->
    <div class="header-area" id="headerArea">
      <div class="container">
        <!-- Header Content -->
        <div class="header-content position-relative d-flex align-items-center justify-content-between">
          <!-- Back Button -->
          <div class="back-button"><a href="elements.html">
              <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
              </svg></a></div>
          <!-- Page Title -->
          <div class="page-heading">
            <h6 class="mb-0">Monitoring Api & Asap</h6>
          </div>
          <!-- Settings -->
        </div>
      </div>
    </div>
    <div class="page-content-wrapper py-3">
      <div class="container">
        <!-- Element Heading -->
        <div class="element-heading mt-3">
          <h6>Realtime Data Monitoring</h6>
        </div>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <!-- Single Skill Progress Bar -->
            <div class="skill-progress-bar d-flex align-items-center">
              <!-- Skill Icon -->
            <!-- Skill Icon with Fire Icon from Font Awesome -->
<!-- Skill Icon with Red Fire Icon using CSS -->
<div class="skill-icon shadow-sm">
  <i class="fas fa-fire" style="color: red;"></i>
</div>


              <!-- Skill Data -->
              <div class="skill-data">
                <!-- Skill Name-->
                <div class="skill-name d-flex align-items-center justify-content-between">
                  <p class="mb-1">Data Api</p><small class="mb-1"><span class="api">{{$api}}</span>%</small>
                </div>
                <!-- Progress -->
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar bar-api bg-danger" style="width: {{$api}}%;" role="progressbar" aria-valuenow="{{$api}}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <!-- Single Skill Progress Bar -->
            <div class="skill-progress-bar d-flex align-items-center">
              <!-- Skill Icon -->
              <div class="skill-icon shadow-sm">
                <i class="fas fa-smog" style="color: #888;"></i>
              </div>
              <!-- Skill Data -->
              <div class="skill-data">
                <!-- Skill Name -->
                <div class="skill-name d-flex align-items-center justify-content-between">
                  <p class="mb-1">Data Asap</p><small class="mb-1"><span class="asap">{{$asap}}</span>%</small>
                </div>
                <!-- Progress -->
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar bar-asap bg-secondary" style="width: {{$asap}}%;" role="progressbar" aria-valuenow="{{$asap}}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- Element Heading -->
        <div class="element-heading mt-3">
          <h6>Status Ruangan</h6>
        </div>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <!-- Single Task Progress -->
            @if($api > 50)
            <div class="single-task-progress">
              <!-- Progress Info -->
              <div class="progress-info d-flex align-items-center justify-content-between">
                <h6 class="mb-1">Lab Project 1 - Bahaya 🔥</h6><span class="mt-0 mb-1"></span>
              </div>
              <!-- Progress -->
              <div class="progress" style="height: 4px;">
                <div class="progress-bar-st bg-danger" style="width: 100%;" role="progressbar" aria-valuemax="100"></div>
              </div>
              <div class="task-member-info d-flex align-items-center justify-content-between">
                <!-- Who working -->
              </div>
            </div>
            @else
            <div class="single-task-progress">
              <!-- Progress Info -->
              <div class="progress-info d-flex align-items-center justify-content-between">
                <h6 class="mb-1">Lab Project 1 - Aman</h6><span class="mt-0 mb-1"></span>
              </div>
              <!-- Progress -->
              <div class="progress" style="height: 4px;">
                <div class="progress-bar-st bg-success" style="width: 100%;" role="progressbar" aria-valuemax="100"></div>
              </div>
              <div class="task-member-info d-flex align-items-center justify-content-between">
                <!-- Who working -->
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Nav -->
    <div class="footer-nav-area" id="footerNav">
      <div class="container px-0">
        <!-- =================================== -->
        <!-- Paste your Footer Content from here -->
        <!-- =================================== -->
        <!-- Footer Content -->
        <div class="footer-nav position-relative">
          <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
            <li class="active"><a href="element-progress-bar.html">
                <svg class="bi bi-house" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>
                  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
                </svg><span>Home</span></a></li>
            <li><a href="element-area-charts.html">
                <svg class="bi bi-collection" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M14.5 13.5h-13A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5zm-13 1A1.5 1.5 0 0 1 0 13V6a1.5 1.5 0 0 1 1.5-1.5h13A1.5 1.5 0 0 1 16 6v7a1.5 1.5 0 0 1-1.5 1.5h-13zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"></path>
                </svg><span>Statistik</span></a></li>
            <li><a href="settings.html">
                <svg class="bi bi-gear" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"></path>
                  <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"></path>
                </svg><span>Settings</span></a></li>
          </ul>
        </div>
      </div>
    </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
jQuery(function($) {
    setInterval(function() {
        var second = parseInt((new Date().getTime() / 1000) % 30);
        if (second === 0) {
            var url = "{{url('api')}}";
            jQuery.get(url, function(data, status) {
                $(".api").text(data.api);
                $(".asap").text(data.asap);
                $(".bar-api").css("width", data.api + "%").attr("aria-valuenow", data.api); // Update lebar dan nilai atribut
                $(".bar-asap").css("width", data.asap + "%").attr("aria-valuenow", data.asap); // Update lebar dan nilai atribut

                // Cek kondisi data.api > 50
                if (data.api > 50) {
                    $(".single-task-progress h6").text("Lab Project 1 - Bahaya 🔥"); // Ubah teks menjadi "Bahaya"
                    $(".progress-bar-st").removeClass("bg-success").addClass("bg-danger"); // Ganti kelas bg-success dengan bg-danger
                } else {
                    $(".single-task-progress h6").text("Lab Project 1 - Aman"); // Biarkan teks "Aman"
                    $(".progress-bar-st").removeClass("bg-danger").addClass("bg-success"); // Kembalikan kelas bg-danger menjadi bg-success jika tidak memenuhi kondisi
                }

                console.log('update data monitoring');
            });
        }
    }, 1000); // atau kurang dari 1 detik
});

</script>
@endsection
