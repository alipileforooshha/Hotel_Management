<form action="">
    <label for="">جستجوی مهمان</label>
    <hr>
    <div class="d-flex flex-column my-2">
        <label class="form-label" for="">ایدی مهمان</label>
        <input class="form-control" type="text" name="" id="" placeholder="3">
    </div>
    <div class="d-flex flex-column my-2">
        <label class="form-label" for="">نام و نام خانوادگی</label>
        <input class="form-control" type="text" name="" id="" placeholder="علی پیله فروشها">
    </div>
    <div class="d-flex flex-column my-2">
        <label class="form-label" for="">شماره ملی</label>
        <input class="form-control" type="text" name="" id="" placeholder="4318391047">
    </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#search_guest">
        جستجو
    </button>
</form>
  
  <!-- The Modal -->
  <div class="modal" id="search_guest">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">لیست مهمان ها</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>ایدی</th>
                    <th>اسم</th>
                    <th>شماره ملی</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                    <td>1</td>
                    <td>علی پیله فروشها</td>
                    <td>444333111222</td>
                    <td>
                        <button class="btn btn-success">
                            انتخاب
                        </button>
                    </td>
                    </tr>
                    <tr class="">
                    <td>2</td>
                    <td>رضا ابوعلی</td>
                    <td>111444222</td>
                    <td>
                        <button class="btn btn-success">
                            انتخاب
                        </button>
                    </td>
                    </tr>
                    <tr class="">
                    <td>3</td>
                    <td>مسعود پرپینچی</td>
                    <td>221141612</td>
                    <td>
                        <button class="btn btn-success">
                            انتخاب
                        </button>
                    </td>
                    </tr>
                </tbody>
                </table>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">بستن</button>
        </div>
  
      </div>
    </div>
  </div>