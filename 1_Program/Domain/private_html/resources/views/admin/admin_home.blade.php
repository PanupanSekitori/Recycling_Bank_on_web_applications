@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')


@endsection

@section('content')



<div class="row">


<div class="col-md-4">

</div>


<div class="col-md-4">
  <?php
        $link1=url('admin/buy');
        $link2=url('admin/product/insert');
        $link3=url('admin/product');
        $link4=url('admin/type/insert');
        $link5=url('admin/type');
        $link6=url('admin/order');
        $link7=url('admin/logout');

  ?>

<center>
  <div class="btn-group-vertical" role="group" aria-label="...">
      <button type="submit" class="btn btn-default " onclick="window.location.href='<?=$link1?>'"><b><h4> เพิ่มบิล(รับซื้อ) </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='/admin/product/insert'"><b><h4> เพิ่มสินค้า(ขยะ) </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='/admin/product'"><b><h4> รายการสินค้า และแก้ไข(ขยะ) </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='/admin/order'" ><b><h4> รายการรับซื้อทั้งหมด </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='/admin/product'" ><b><h4> ปรับเปลี่ยนสถานะ เปิด/ปิด </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='/admin/report'" ><b><h4> ออกรายงาน </h4></b></button>
      <button type="submit" class="btn btn-danger " onclick="window.location.href='/logout'" ><b><h4> ออกจากระบบ </h4></b></button>
  </div>
</p>
  </center>

<br/><br/><br/>
  <?php
        $link1=url('admin/buy');
        $link2=url('admin/product/insert');
        $link3=url('admin/product');
        $link4=url('admin/type/insert');
        $link5=url('admin/type');
        $link6=url('admin/order');
        $link7=url('admin/logout');

  ?>

<center>
  <!-- <div class="btn-group-vertical" role="group" aria-label="...">
      <button type="submit" class="btn btn-default " onclick="window.location.href='<?=$link1?>'"><b><h4> รับซื้อ </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='<?=$link2?>'"><b><h4> เพิ่มสินค้า </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='<?=$link3?>'"><b><h4> สินค้า </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='<?=$link4?>'"><b><h4> เพิ่มประเภท สินค้า </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='<?=$link5?>'"><b><h4> แก้ไข,ลบ ประเภทสินค้า </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='<?=$link6?>'"><b><h4> รายการใบสั่งซื้อ </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='<?=$link7?>'" ><b><h4> ออกจากระบบ </h4></b></button>
  </div> -->
</p>

  </center>
</div>

<div class="col-md-4">

</div>


</div>
      @endsection

      @section('footer')

      @endsection
