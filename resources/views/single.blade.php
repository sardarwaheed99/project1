
<!------ Include the above in your HEAD tag ---------->


@extends('layouts.admin')


@section('content')
<link rel="stylesheet" href="{{ asset('public/css/custom.css') }}">

<div class="content-wrapper">
<div class="row">
<div class="col-md-8">
<main>
    <div class="section section-gray">
        <div class="section-content">
            <div class="product-details">
                <div class="product-images">
                    <li class="preview"><img src="{{ asset('public/images/'.$data->image) }}" alt=""></li>
                    <!-- Don't show small pictures if there's only 1 -->
                    
					</div>
                <div class="product-info">
                    <li class="product-name">{{$data->p_name}}</li>
                    <li class="product-price"><span>Rs </span><span>{{$data->p_price}}</span></li>
					<li class="product-price">
					<span> {{$data->p_type}} </span>		
				</li>
				<li class="product-price">
					<span> {{$data->quantity}} </span>		
				</li>
					<div class="product-price">
                        <p>{{$data->description}}</p>
                        
                    </div>
                    <li>
                    <b> Cash On Delivery </b>
                    </li>
					<div class="product-addtocart">
                        <a style="width: 75%;
  cursor: pointer;
  background: #000;
  color: #fff;
  display: block;
  border: none;
  outline: none;
  padding: 10px;" href="{{route('cart-create',$data->id)}}">  Add To Cart</a>
                    </div>
            
</div>
            </div>
        </div>
    </div>
    
    
    
</main>
</div>
<div class="col-md-3">
<div class="detailBox" style="margin:0px; height:410px;">
    <div class="titleBox">
      <label>Comment Box</label>
        <button type="button" class="close" aria-hidden="true">&times;</button>
    </div>
    <div class="commentBox">
        
        <!-- <p class="taskDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
    </div>
    <div class="actionBox">
        <ul class="commentList">
            @foreach($comments as $comment)
            <li>
                <div class="commenterImage">
                 <i class="fas fa-user"></i>


                </div>
                <div class="commentText">
                    <p class="">{{$comment->comment}}</p> <span class="date sub-text"></span>

                </div>

            </li>
            <hr>
         @endforeach
        </ul>
        <form class="form-inline" method="POST" enctype="multipart/form-data" action="{{route('product-comment')}}">
        {{ csrf_field() }}
        <input type="hidden" name="product_id" value="{{$data->id}}">
            <div class="form-group">
            
                <input class="form-control" type="text" name="comment" placeholder="Your comments"   Required  />
            </div>
            <div class="form-group">
                <button class="btn btn-default">Add</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection