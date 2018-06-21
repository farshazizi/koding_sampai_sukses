<script type="text/javascript">
  function forwardPembayaran(value){
    if(value == 1){
      $('#menu1').removeClass('active');
      $('#menu2').addClass('active');
    }else if(value == 2){
      $('#menu2').removeClass('active');
      $('#menu3').addClass('active');
    }else if(value == 3){
      $('#menu3').removeClass('active');
      $('#menu4').addClass('active');
    }else if(value == 4){
      $('#menu4').removeClass('active');
      $('#menu5').addClass('active');
    }else if(value == 5){
      $('#menu5').removeClass('active');
      $('#menu6').addClass('active');
    }
  }

  function backwardPembayaran(value){
    if(value == 2){
      $('#menu2').removeClass('active');
      $('#menu1').addClass('active');
    }else if(value == 3){
      $('#menu3').removeClass('active');
      $('#menu2').addClass('active');
    }else if(value == 4){
      $('#menu4').removeClass('active');
      $('#menu3').addClass('active');
    }else if(value == 5){
      $('#menu5').removeClass('active');
      $('#menu4').addClass('active');
    }else if(value == 6){
      $('#menu6').removeClass('active');
      $('#menu5').addClass('active');
    }
  }

  function tambahRekan(){
    var kelompok2 = document.getElementById("divkelompok2").style.display;
    var kelompok3 = document.getElementById("divkelompok3").style.display;
    var kelompok4 = document.getElementById("divkelompok4").style.display;
    var kelompok5 = document.getElementById("divkelompok5").style.display;
    if(kelompok2 == "none"){
      document.getElementById("divkelompok2").style = "";
    }else{
      if(kelompok3 == "none"){
        document.getElementById("divkelompok3").style = "";
      }else{
        if(kelompok4 == "none"){
          document.getElementById("divkelompok4").style = "";
        }else{
          if(kelompok5 == "none"){
            document.getElementById("divkelompok5").style = "";
            document.getElementById("btntambahrekan").style.display = "none";
          }
        }
      }
    }
  }

  function tambahPendidikan(){
    var trpendidikan2 = document.getElementById("trpendidikan2").style.display;
    var trpendidikan3 = document.getElementById("trpendidikan3").style.display;
    if(trpendidikan2 == "none"){
      document.getElementById("trpendidikan2").style = "";
    }else{
      if(trpendidikan3 == "none"){
        document.getElementById("trpendidikan3").style = "";
        document.getElementById("btntambahpendidikan").style.display = "none";
      }
    }
  }

  function tambahKarir(){
    var trkarir2 = document.getElementById("trkarir2").style.display;
    var trkarir3 = document.getElementById("trkarir3").style.display;
    var trkarir4 = document.getElementById("trkarir4").style.display;
    var trkarir5 = document.getElementById("trkarir5").style.display;
    if(trkarir2 == "none"){
      document.getElementById("trkarir2").style = "";
    }else{
      if(trkarir3 == "none"){
        document.getElementById("trkarir3").style = "";
      }else{
        if(trkarir4 == "none"){
          document.getElementById("trkarir4").style = "";
        }else{
          if(trkarir5 == "none"){
            document.getElementById("trkarir5").style = "";
            document.getElementById("btntambahkarir").style.display = "none";
          }
        }
      }
    }
  }

  function tambahKasus(){
    var trkasus6 = document.getElementById("trkasus6").style.display;
    var trkasus7 = document.getElementById("trkasus7").style.display;
    var trkasus8 = document.getElementById("trkasus8").style.display;
    var trkasus9 = document.getElementById("trkasus9").style.display;
    var trkasus10 = document.getElementById("trkasus10").style.display;
    if(trkasus6 == "none"){
      document.getElementById("trkasus6").style = "";
    }else{
      if(trkasus7 == "none"){
        document.getElementById("trkasus7").style = "";
      }else{
        if(trkasus8 == "none"){
          document.getElementById("trkasus8").style = "";
        }else{
          if(trkasus9 == "none"){
            document.getElementById("trkasus9").style = "";
          }else{
            if(trkasus10 == "none"){
              document.getElementById("trkasus10").style = "";
              document.getElementById("btntambahkasus").style.display = "none";
            }
          }
        }
      }
    }
  }

  function btnPengembanganprofesi(){
    var trpengembanganprofesi6 = document.getElementById("trpengembanganprofesi6").style.display;
    var trpengembanganprofesi7 = document.getElementById("trpengembanganprofesi7").style.display;
    var trpengembanganprofesi8 = document.getElementById("trpengembanganprofesi8").style.display;
    var trpengembanganprofesi9 = document.getElementById("trpengembanganprofesi9").style.display;
    var trpengembanganprofesi10 = document.getElementById("trpengembanganprofesi10").style.display;
    if(trpengembanganprofesi6){
      document.getElementById("trpengembanganprofesi6").style = "";
    }else{
      if(trpengembanganprofesi7){
        document.getElementById("trpengembanganprofesi7").style = "";
      }else{
        if(trpengembanganprofesi8){
          document.getElementById("trpengembanganprofesi8").style = "";
        }else{
          if(trpengembanganprofesi9){
            document.getElementById("trpengembanganprofesi9").style = "";
          }else{
            if(trpengembanganprofesi10){
              document.getElementById("trpengembanganprofesi10").style = "";
              document.getElementById("btnpengembanganprofesi").style.display = "none";
            }
          }
        }
      }
    }
  }

  function temanPraktek(value){
    if(value == 1){
      document.getElementById("kelompok1").readOnly = true;
      document.getElementById("kelompok2").readOnly = true;
      document.getElementById("kelompok3").readOnly = true;
      document.getElementById("kelompok4").readOnly = true;
      document.getElementById("kelompok5").readOnly = true;

      document.getElementById("kelompok1").value = "";
      document.getElementById("kelompok2").value = "";
      document.getElementById("kelompok3").value = "";
      document.getElementById("kelompok4").value = "";
      document.getElementById("kelompok5").value = "";
    }else{
      document.getElementById("kelompok1").readOnly = false;
      document.getElementById("kelompok2").readOnly = false;
      document.getElementById("kelompok3").readOnly = false;
      document.getElementById("kelompok4").readOnly = false;
      document.getElementById("kelompok5").readOnly = false;
    }
  }
  
  document.getElementById("formsipp").onkeypress = function(e) {
    var key = e.charCode || e.keyCode || 0;     
    if (key == 13) {
      // alert("I told you not to, why did you do it?");
      e.preventDefault();
    }
  }

  function loadingUpload(){
  	// $('#loadingModal').modal('show');
  	$('#loadingModal').modal({
  	    backdrop: 'static',
  	    keyboard: false  // to prevent closing with Esc button (if you want this too)
  	});
  }

  function lihatGambar(link){
    $('#lihatGambarModal').modal('show');
    // gambarModal
    // linkModal
    if(link == '' || link == null){
      $("#gambarModal").attr('src', link);
      $("#linkModal").attr("href", link)
      document.getElementById("linkModal").innerHTML = link;
    }else{
      $("#gambarModal").attr('src', link);
      $("#linkModal").attr("href", link)
      document.getElementById("linkModal").innerHTML = link;
    }
  }

</script>