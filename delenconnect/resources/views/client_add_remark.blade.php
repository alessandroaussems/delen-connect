<span class="add" onclick="showRemarkForm()"></span>
<form method="POST" id="remarkform" class="hide">
    <span class="close" onclick="hideRemarkForm()"></span>
    <span id="eye" onclick="setVisible()"></span>
    <label for="remarks">Uw opmerkingen?</label>
    <textarea id="remarks"></textarea>
    <input type="checkbox" style="display: none;" id="eyevalue" name="visible">
    <button>Toevoegen</button>
</form>