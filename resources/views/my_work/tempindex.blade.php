@extends('layouts.admin')
@section('content')


    
        
        
             

                    @foreach($products as $key => $product)
                      
                            
                                {{ $product->headtitle ?? '' }}
                           
                    
                                {{ $product->title ?? '' }}
                       
                                {{ $product->category ?? '' }}
                   

                                {{ $product->sub_title ?? '' }}
                  
                                {{ $product->slug ?? '' }}
                   
                                {{ $product->day ?? '' }}
                    
                                {{ $product->month ?? '' }}
                           
                                {{ $product->description ?? '' }}
                    
                                {{ $product->body ?? '' }}
                           
                                {{ $product->image ?? '' }}
                    
                    @endforeach
            

@section('scripts')
@parent
@endsection
@endsection