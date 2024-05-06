<!-- Modal -->
<div class="modal fade" id="addOfficialsModal" tabindex="-1" role="dialog" aria-labelledby="addOfficialsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addOfficialsModalLabel">Register Official</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card-body">
        <form class="form-sample" action="././saves/officialsSave.php" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="official_firstname" name="official_firstname">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="official_lastname" name="official_lastname">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Gender</label>
                  <div class="col-sm-9">
                    <select class="form-select" id="official_gender" name="official_gender">
                      <option>Male</option>
                      <option>Female</option>
                      <option>Prefer not to say</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Appointed Position</label>
                  <div class="col-sm-9">
                    <select class="form-select" id="official_position" name="official_position">
                      <option value="" disabled="" selected="">Select your Option</option>
                      <option>Punong Baranggay</option>
                      <option>Baranggay Kagawad</option>
                      <option>Baranggay Treasurer</option>
                      <option>Baranggay Secretary</option>
                      <option>SK Chairperson</option>
                      <option>SK Member</option>
                      <option>Other Appointed Baranggay Official</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Date of Birth</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" id="official_dob" name="official_dob">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Project</label>
                  <div class="col-sm-9">
                    <select class="form-select" id="official_project" name="official_project">
                      <option value="" disabled="" selected="">Select your option</option>
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
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" name="add_official_btn" value="Add Official" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btnn">
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
