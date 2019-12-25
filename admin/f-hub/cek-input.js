function validasi(){
  var x = document.forms["input"]["optical_light_tx"].value;
  if (x == null || x == "") {
    alert("Optical Light TX	Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["optical_light_rx"].value;
  if (x == null || x == "") {
    alert(" Optical Light RX Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["receiver_no"].value;
  if (x == null || x == "") {
    alert("Receiver No Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["receiver_loss"].value;
  if (x == null || x == "") {
    alert("Receiver Loss Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["transmitter_no"].value;
  if (x == null || x == "") {
    alert("transmitter No Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["transmitter_persen"].value;
  if (x == null || x == "") {
    alert("Transmitter % Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["signal_trans_low"].value;
  if (x == null || x == "") {
    alert("Signal Transmitter Low Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["signal_trans_dl"].value;
  if (x == null || x == "") {
    alert("Signal Transmitter DL Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["cmts_no"].value;
  if (x == null || x == "") {
    alert("CMTS No Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["cmts_ds"].value;
  if (x == null || x == "") {
    alert("CMTS DS Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["cmts_us"].value;
  if (x == null || x == "") {
    alert("CMTS US Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["pic"].value;
  if (x == null || x == "") {
    alert("PIC Tidak Boleh Kosong");
    return false;
  }
}
