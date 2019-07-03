<div id="active-call-container" style="display: none;">
    <p style="font-size: 36px; display: inline-block">ACTIVE CALL</p> 
    <div id="right-column-active-call">
      <form id="active-call-form">
        <div id="first-col">
          <p>ID</p>
          <p>SUSPECT</p> 
          <p>LOCATION</p>
          <p>TYPE</p>
          <p>VEHICLE</p>
          <p>CALL TITLE</p>
          <p>DESCRIPTION</p>
        </div>
        <div id="second-col">
          <input type="text" disabled value="<?php echo $_SESSION['activeCall'] ?>">
          <input type="text" disabled value="<?php echo $_SESSION['c_sus'] ?>">
          <input type="text" disabled value="<?php echo $_SESSION['c_loc'] ?>">
          <input type="text" disabled value="<?php echo $_SESSION['c_type'] ?>">
          <input type="text" disabled value="<?php echo $_SESSION['c_veh'] ?>">
          <input type="text" disabled value="<?php echo $_SESSION['c_tit'] ?>">
          <textarea type="text" disabled><?php echo $_SESSION['c_desc'] ?></textarea>
        </div>
      </form>

      <div id="call-btns">
        <div id="first-call-col">
          <a href="" class="call-action-btn" id="backup-3"><div><p>CODE 3</p></div></a>
          <a href="" class="call-action-btn" id="backup-2"><div><p>CODE 2</p></div></a>
          <a href="" class="call-action-btn" id="backup-trans"><div><p>TRANSPORT</p></div></a>
        </div>
        <div id="second-call-col">
          <a onClick="cancelConfirm('Are you sure you want to cancel this call?');" class="call-action-btn" id="cancel-call-btn"><div><p>CANCEL CALL</p></div></a>
          <a href="" class="call-action-btn" id="backup-btn"><div><p>BACKUP</p></div></a>
          <a onClick="writeReport();" class="call-action-btn" id="write-rep-btn"><div><p>WRITE REPORT</p></div></a>
          <a href="./includes/call/concludeCall.php" class="call-action-btn" id="conclude-call-btn"><div><p>CONCLUDE CALL</p></div></a>
        </div>
      </div>

    </div>
</div>

<div class="confirmation-box" id="con-box">
    <p id="confirmation-text">INVALID USER OR PASSWORD</p>
    <div id="inline-confirm">
      <button id="firstBtn" onClick="refuseConfirm();"><span>NO</span></button>
      <button id="secondBtn" onClick="proceedConfirm();"><span>YES</span></button>
    </div>
</div>

<script>
  function cancelConfirm(confirmationText) {
    document.getElementById('con-box').style.display = "block";
    document.getElementById('confirmation-text').innerHTML = confirmationText;
  }
  function refuseConfirm() {
    document.getElementById('con-box').style.display = "none";
  }
  function proceedConfirm() {
    window.location.href = "./includes/call/concludeCall";
  }
</script>