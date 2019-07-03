<div id="create-call-container">
    <form name="c-call" id="create-call-form" action="./includes/call/createCall.php" method="get">
      <p style="font-size: 36px; margin-bottom: 18px;">CREATE A CALL</p>
      <div id="first-row">
        <p style="font-size: 22px">TYPE</p>
        <input spellcheck="false" type="text" name="call_type">
        <p style="font-size: 22px">SUSPECT</p>
        <input spellcheck="false" type="text" name="call_suspect">
        <p style="font-size: 22px">VEHICLE</p>
        <input spellcheck="false" type="text" name="call_veh">
            
        <a id="start-call-btn" onClick="submitCall();"><div><p>START CALL</p></div></a>
      </div>
      <div id="second-row">
        <p style="font-size: 22px">LOCATION</p>
        <input spellcheck="false" type="text" name="call_location">
        <p style="font-size: 22px">CALL TITLE</p>
        <input spellcheck="false" type="text" name="call_title">
        <p style="font-size: 22px">INITIAL DESCRIPTION</p>
        <textarea spellcheck="false" name="call_descr" cols="num" rows="num" style="font-size: 22px; width: 446px; height: 130px"></textarea>
      </div>
    </form>
</div>