<div class="modal fade" id="addBlotterModal" tabindex="-1" role="dialog" aria-labelledby="addBlotterModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addBlotterModalLabel">Add Blotter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="././saves/blotterrepSave.php" method="post">
          <div class="row">
            <div class="col-md-6">
              <!-- Complainant -->
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Complainant</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="blotter_complainant" name="blotter_complainant">
                </div>
              </div>
              <!-- Victim(s) -->
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Victim(s)</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="blotter_victims" name="blotter_victims">
                </div>
              </div>
              <!-- Type -->
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Type</label>
                <div class="col-sm-9">
                  <select class="form-select" id="blotter_type" name="blotter_type">
                    <option value="" disabled="" selected="">Select type</option>
                    <option>Physical Assault</option>
                    <option>Theft</option>
                    <option>Harassment</option>
                    <!-- Add more options as needed -->
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- Respondent -->
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Respondent</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="blotter_respondent" name="blotter_respondent">
                </div>
              </div>
              <!-- Location -->
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Location</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="blotter_location" name="blotter_location">
                </div>
              </div>
              <!-- Date -->
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Date</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="blotter_date" name="blotter_date">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" name="add_blotter_btn" value="Add Blotter" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"></div>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>
