@extends('user.layouts.master')

@section('title', 'Giỏ hàng')


@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-8">
            <h4>Giỏ hàng</h4>
        </div>
        <div class="col-4">
            <h4>Hóa đơn</h4>
        </div>
    </div>
    
    <div class="row">
        <div class="col-8">
            <div class="d-flex flex-row">
                <div class="align-items-start mb-3">
                    <a href="#">
                        <img src="https://images.nike.com/is/image/DotCom/CZ1856_002_A_PREM?align=0,1&cropN=0,0,0,0&resMode=sharp&bgc=f5f5f5&wid=150&fmt=jpg" width="100px "/>
                    </a>
                </div>

                <div class="align-self-start ml-3">
                    <a href="#">Nike Wildhorse 7 </a>
                    <div class="mt-2">
                        <label>Size: 43</label>
                    </div>
                </div>
                
                <div class="align-self-start ml-auto">
                    100$
                </div>
            </div>
            
            


            <div class="d-flex flex-row">
                <div class=" align-items-start">
                    <a href="#">
                        <img src="https://images.nike.com/is/image/DotCom/CZ1856_002_A_PREM?align=0,1&cropN=0,0,0,0&resMode=sharp&bgc=f5f5f5&wid=150&fmt=jpg" width="100px "/>
                    </a>
                </div>

                <div class="align-self-start ml-3">
                    <a href="#">Nike Wildhorse 7 </a>
                </div>
                
                <div class="align-self-start ml-auto">
                    100$
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex flex-row mb-3">
                <div class="align-self-start">
                    Tạm tính
                </div>
                
                <div class="align-self-start ml-auto">
                    100$
                </div>
            </div>

            <div class="d-flex flex-row mb-3">
                <div class="align-self-start">
                    Ship
                </div>
                
                <div class="align-self-start ml-auto">
                    Free
                </div>
            </div>

            <div class="d-flex flex-row">
               Thuế VAT đã bao gồm trong giá sản phẩm
            </div>

        </div>
    </div>
    
</div>
@endsection