@include('layout')
<div class="section d-flex justify-content-between align-items-between">
    @include('search_guest')
    <form action="">
        <div class="d-flex flex-column">
            <label for="">خدمات کارت ویژه</label>
            <hr>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">شماره کارت ویژه</label>
                <input class="form-control" type="text" name="" id="">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">موجودی کارت ویژه</label>
                <input class="form-control" type="text" name="" id="">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">تاریخ صدور کارت ویژه</label>
                <input class="form-control" type="text" name="" id="">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">تاریخ انقضا کارت ویژه</label>
                <input class="form-control" type="text" name="" id="">
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    شارژ کارت ویژه
                </button>
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal1">
                    تمدید کارت ویژه
                </button>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal2">
                    کسر مبلغ کارت ویژه
                </button>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal3">
                    تسویه کارت ویژه
                </button>
            </div>
        </div>
        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                  <form action="">
                      <div>
                          <label class="form-label" for="">مبلغ شارژ</label>
                          <input type="number" class="form-control" name="charged_value" id="" placeholder="200,000 toman">
                      </div>
                      <button class="btn btn-success mt-2">شارژ</button>
                  </form>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
        
            </div>
          </div>
        </div>
        <div class="modal" id="myModal1">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                  <form action="">
                      <div>
                          <label class="form-label" for="">مبلغ شارژ</label>
                          <input type="number" class="form-control" name="charged_value" id="" placeholder="3 Days">
                      </div>
                      <button class="btn btn-success mt-2">شارژ</button>
                  </form>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
        
            </div>
          </div>
        </div>
        <div class="modal" id="myModal2">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Modal Heading</h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="">
                        <div>
                            <label class="form-label" for="">مبلغ کسر</label>
                            <input type="number" class="form-control" name="charged_value" id="" placeholder="3 Days">
                        </div>
                        <button class="btn btn-success mt-2">کسر مبلغ</button>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
          
              </div>
            </div>
        </div>
        <div class="modal" id="myModal3">
          <div class="modal-dialog">
            <div class="modal-content">
                  <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">تسویه کارت ویژه</h4>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                  <form action="">
                      <div>
                          <label class="form-label" for="">مبلغ کل</label>
                          <input type="number" class="form-control" name="charged_value" id="" placeholder="300,000 toman">
                      </div>
                      <button class="btn btn-success mt-2">تسویه</button>
                  </form>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </form>
</div>