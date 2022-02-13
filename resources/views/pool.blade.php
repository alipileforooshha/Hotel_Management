@include('layout')
@include('layout')
<div class="section">
    <form action="">
        
    </form>
    <form action="">
        <div class="d-flex flex-column">
            <label for="">استخر</label>
            <hr>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">ایدی مهمان</label>
                <input class="form-control" type="text" name="" id="">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">هزینه سانس</label>
                <input class="form-control" type="number" name="" id="" placeholder="50,000" disabled>
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">زمان پذیرش</label>
                <input class="form-control" type="datetime-local" name="" id="">
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    نمایش منو
                </button>
                <!-- Button to Open the Modal -->
                <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal1">
                    ثبت سفارش
                </button>
            </div>
        </div>
    </form>
    <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">منو</h4>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>شماره آیتم</th>
                        <th>اسم</th>
                        <th>مواد</th>
                        <th>قیمت</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                        <td>1</td>
                        <td>قهوه اسپرسو</td>
                        <td>قهوه اسپرسو</td>
                        <td>30,000 toman</td>
                        <td>
                            <button class="btn btn-success">
                                اضافه
                            </button>
                        </td>
                        </tr>
                        <tr class="">
                        <td>2</td>
                        <td>سالاد سزار</td>
                        <td>گوجه - کاهو - مرغ گریل شده - نان سیر</td>
                        <td>70,000 toman</td>
                        <td>
                            <button class="btn btn-success">
                                اضافه
                            </button>
                        </td>
                        </tr>
                        <tr class="">
                        <td>3</td>
                        <td>سیب زمینی پنیری</td>
                        <td>سیب زمینی سرخ شده - قارچ - پنیر پیتزا - ذرت</td>
                        <td>60,000</td>
                        <td>
                            <button class="btn btn-success">
                                اضافه
                            </button>
                        </td>
                        </tr>
                    </tbody>
                    </table>
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
      
          </div>
        </div>
      </div>    
</div>