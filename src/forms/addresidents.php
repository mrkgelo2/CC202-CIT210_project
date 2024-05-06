<div class="modal fade" id="addResidentModal" tabindex="-1" role="dialog" aria-labelledby="addResidentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addResidentModalLabel">Add Resident</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="././saves/residentsSave.php" method= "post">
          <div class="row">
            <div class="col-md-6">
              <!-- First Name -->
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">First Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="resident_firstname" name="resident_firstname">
                </div>
              </div>
              <!-- Gender -->
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-9">
                  <select class="form-select" id="resident_gender" name="resident_gender">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Prefer not to say</option>
                  </select>
                </div>
              </div>
              <!-- Civil Status -->
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Civil Status</label>
                <div class="col-sm-9">
                  <select class="form-select" id="resident_civilstatus" name="resident_civilstatus">
                    <option>Single</option>
                    <option>Married</option>
                    <option>Divorced</option>
                    <option>Widowed</option>
                    <option>Separated</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Contact Number</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="resident_contactnumber" name="resident_contactnumber">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- Last Name -->
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Last Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="resident_lastname" name="resident_lastname">
                </div>
              </div>
              <!-- Date of Birth -->
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Date of Birth</label>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="dd/mm/yyyy" id="resident_dob" name="resident_dob">
                </div>
              </div>
              <!-- Purok -->
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Project</label>
                <div class="col-sm-9">
                  <select class="form-select" id="resident_project" name="resident_project">
                    <option>Project 1</option>
                    <option>Project 2</option>
                    <option>Project 3</option>
                    <option>Project 4</option>
                    <option>Project 5</option>
                    <option>Project 6</option>
                    <option>Project 7</option>
                  </select>
                </div>
              </div>
              <!-- Household No. -->
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Household No.</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="resident_householdnumber" name="resident_householdnumber">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" name="add_resident_btn" value="Add Resident" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">      </div>
        </form>
      </div>
    </div>
  </div>
</div>
