<div class="row">
   <div class="col-12 grid-margin">
      <div class="card">
         <div class="card-body">
            <div class="row">
               <div class="col-sm-3">
                
                
                 <div id="accordion">
                  <div class="product_card">
                     <div id="headingBasicInformation">
                         <a class="btn btn-link" data-toggle="collapse" data-target="#BasicInformation" aria-expanded="true" aria-controls="collapseOne">
                           Product Information
                         </a>
                     </div>
                 
                     <div id="BasicInformation" class="collapse show" aria-labelledby="headingBasicInformation" data-parent="#accordion">
                       <div class="product_card_body">
                         <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                           <a class="nav-link active" data-toggle="pill" href="#General" role="tab" aria-selected="true">General</a>
                           <a class="nav-link" data-toggle="pill" href="#Price" role="tab"  aria-selected="false">Price</a>
                           <a class="nav-link" data-toggle="pill" href="#Inventory" role="tab" aria-selected="false">Inventory</a>
                           <a class="nav-link" data-toggle="pill" href="#Images" role="tab" aria-selected="false">Images</a>
                           <a class="nav-link" data-toggle="pill" href="#SEO" role="tab" aria-selected="false">SEO</a>
                           <a class="nav-link" data-toggle="pill" href="#Specification" role="tab" aria-selected="true">Sale Option</a>
                         </div>
                       </div>
                     </div>
                   </div>
                
                  </div>



               </div>
               <div class="col-sm-9">
                  <form class="form-sample" id="product_form" method="post" action="{{ route('admin.product.update',$product->id)}}" >
                     @csrf
                     <input type="hidden" name="product_type" value="digital">
                     <div class="tab-content" id="v-pills-tabContent">
                        <!-- General Section Starts -->
                        <div class="tab-pane fade show active" id="General" role="tabpanel" >
                           <p class="content_title">General</p>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Title<span class="required">*</span></label>
                              <div class="col-sm-9">
                                 <input  type="text"  name="title" value="{{$product->title}}" class="form-control" />
                              </div>
                           </div>

                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Short Description<span class="required">*</span></label>
                              <div class="col-sm-9">
                                 <textarea type="text" name="short_description" class="textEditor form-control" >{{$product->short_description}}</textarea>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Description</label>
                              <div class="col-sm-9">
                                 <textarea type="text" name="description" class="textEditor form-control" >{{$product->description}}</textarea>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Brand</label>
                              <div class="col-sm-9">
                                 <select name="brand_id" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
                                    <option value="0">Select Brand</option>
                                    @foreach($brands as $brand)
                                    <option data-tokens="{{$brand->title}}" value="{{$brand->id}}" @if($product->brand_id == $brand->id ) selected @endif >{{$brand->title}}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Category<span class="required">*</span></label>
                              <div class="col-sm-9">
                                <select name="category_id" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
                                   <option value="0">Primary Category</option>
                                   @foreach(App\Models\Category::orderBy('title','asc')->where('is_service_category', 0)->where('parent_id',0)->get() as $category)
                                      <option data-tokens="{{$category->title}}" value="{{$category->id}}"
                                         @foreach(explode(',',$product->category_id) as $catId)
                                            @if($category->id == $catId) selected @endif
                                         @endforeach

                                         >{{$category->title}}</option>
                                         @foreach(App\Models\Category::orderBy('title','asc')->where('is_service_category', 0)->where('parent_id',$category->id)->get() as $child)
                                            <option data-tokens="{{$child->title}}" value="{{$child->id}}"
                                               @foreach(explode(',',$product->category_id) as $catId)
                                                  @if($child->id == $catId) selected @endif
                                               @endforeach
                                            >{{'¦––'.$child->title}}</option>

                                            @foreach(App\Models\Category::orderBy('title','asc')->where('is_service_category', 0)->where('parent_id',$child->id)->get() as $child2)
                                            <option data-tokens="{{$child2->title}}" value="{{$child2->id}}"
                                               @foreach(explode(',',$product->category_id) as $catId)
                                                  @if($child2->id == $catId) selected @endif
                                               @endforeach
                                            >{{'¦––––'.$child2->title}}</option>

                                          @foreach(App\Models\Category::orderBy('title','asc')->where('is_service_category', 0)->where('parent_id',$child2->id)->get() as $child3)
                                            <option data-tokens="{{$child3->title}}" value="{{$child3->id}}"
                                               @foreach(explode(',',$product->category_id) as $catId)
                                                  @if($child3->id == $catId) selected @endif
                                               @endforeach
                                            >{{'¦––––--'.$child3->title}}</option>
                                               @foreach(App\Models\Category::orderBy('title','asc')->where('is_service_category', 0)->where('parent_id',$child3->id)->get() as $child4)
                                                <option data-tokens="{{$child4->title}}" value="{{$child4->id}}"
                                                   @foreach(explode(',',$product->category_id) as $catId)
                                                      @if($child4->id == $catId) selected @endif
                                                   @endforeach
                                                >{{'¦––––----'.$child4->title}}</option>
                                                @endforeach

                                            @endforeach


                                            @endforeach
                                         @endforeach
                                      @endforeach
                                </select>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Seller<span class="required">*</span></label>
                              <div class="col-sm-9">
                                <select class="selectpicker form-control"  name="seller_id">
                                   @php 
                                      $vendors = App\Models\Admins::orderBy('name','asc')->get();
                                      $vendorArray = [];
                                      foreach($vendors as $vendor){
                                         if($vendor->hasRole('seller')){
                                            $vendorArray[] = $vendor;
                                         }
                                      }
                                   @endphp

                                   @foreach($vendorArray as $seller)
                                      <option @if($product->seller_id == $seller->id) selected @endif value="{{$seller->id}}">{{$seller->name}}</option>
                                   @endforeach
                                </select>
                              </div>
                           </div>


                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Status</label>
                              <div class="col-sm-9">
                                 <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                    <label class="switch"><input name="is_active" type="checkbox"  @if($product->is_active == 1) checked="" @endif ><span class="slider round"></span></label>
                                 </div>
                              </div>
                           </div>

                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Is Promotion</label>
                              <div class="col-sm-9">
                                 <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                    <label class="switch"><input name="is_promotion" type="checkbox"  @if($product->is_promotion == 1) checked="" @endif ><span class="slider round"></span></label>
                                 </div>
                              </div>
                           </div>




                        </div>
                        <!-- General Section ends -->
                        <!-- Price Section starts -->
                        <div class="tab-pane fade" id="Price" role="tabpanel" >
                           <p class="content_title">Price</p>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Price<span class="required">*</span></label>
                              <div class="col-sm-9">
                                 <div class="input-group">
                                    <div class="input-group-prepend bg-primary border-primary">
                                       <span class="input-group-text bg-transparent text-white">{{ Helper::getDefaultCurrency()->currency_symbol }}</span>
                                    </div>
                                    <input type="number" step="0.01" name="price" value="{{$product->price}}"  class="form-control" />
                                 </div>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Special Price</label>
                              <div class="col-sm-9">
                                 <div class="input-group">
                                    <div class="input-group-prepend bg-primary border-primary">
                                       <span class="input-group-text bg-transparent text-white">{{ Helper::getDefaultCurrency()->currency_symbol }}</span>
                                    </div>
                                    <input type="number" step="0.01" name="special_price" value="{{$product->special_price}}"  class="form-control" />
                                 </div>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Special Price Type</label>
                              <div class="col-sm-9">
                                   <select name="special_price_type" class="form-control">
                                      <option value="1" @if($product->special_price_type == 1) selected @endif >Fixed</option>
                                      <option value="2" @if($product->special_price_type == 2) selected @endif  >Percent</option>
                                   </select>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Special Price Start</label>
                              <div class="col-sm-9">
                                 <input type="datetime-local"   name="special_price_start" value="{{ date('Y-m-d\TH:i:s', strtotime($product->special_price_start)) }}"  class="form-control" />
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Special Price End</label>
                              <div class="col-sm-9">
                                 <input type="datetime-local" name="special_price_end" class="form-control " value="{{ date('Y-m-d\TH:i:s', strtotime($product->special_price_end)) }}" />
                              </div>
                           </div>
                        </div>
                        <!-- Price Section ends -->
                        <!-- Inventory Section Starts -->
                        <div class="tab-pane fade" id="Inventory" role="tabpanel" >
                           <p class="content_title">Inventory</p>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">SKU<span class="required">*</span></label>
                              <div class="col-sm-9">
                                 <input type="text"  name="sku" value="{{ $product->sku}}" class="form-control" />
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Inventory Management</label>
                              <div class="col-sm-9">
                                <select name="manage_stock" class="form-control">
                                   <option value="0" @if($product->manage_stock == 0) selected @endif  >Don't Track Inventory</option>
                                      <option value="1" @if($product->manage_stock == 1) selected @endif >Track Inventory</option>
                                   </select>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Quantity</label>
                              <div class="col-sm-9">
                                 <input type="text" name="qty"class="form-control" value="{{$product->qty}}" >
                              </div>
                           </div>
						   
						   	<div class="form-group row">
                               <label class="col-sm-3 col-form-label">Maximum Cart Qty</label>
                               <div class="col-sm-9">
                                  <input type="text" name="max_cart_qty"class="form-control"  value="{{$product->max_cart_qty ?? 5}}" >
                               </div>
                            </div>
							
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Stock Availability</label>
                              <div class="col-sm-9">
                                <select name="in_stock" class="form-control" >
                                   <option value="1" @if($product->in_stock == 1) selected @endif >In Stock</option>
                                   <option value="0" @if($product->in_stock == 0) selected @endif >Out of Stock</option>
                                </select>
                              </div>
                           </div>
                        </div>
                        <!-- Inventory Section Ends -->

                        <!-- Image Section Starts -->
                        <div class="tab-pane fade" id="Images" role="tabpanel">
                          <p class="content_title">Images</p>
                          <div class="form-group row ">
                             <div class="col-sm-3"><label class="col-form-label">Defalut Product Image</label></div>
                               <div class="col-sm-9">
                                  <button type="button" data-image-width="800" data-image-height="800" data-input-name="default_image" data-input-type="single" class="btn btn-success initConcaveMedia" >Select File</button>
                                @if($product->default_image)
                                  <p class="selected_images_gallery">
                                       <span>
                                         <input type="hidden" value="{{$product->default_image}}" name="default_image">
                                         <img src="{{'/'.$product->default_image}}"> 
                                         <b data-file-url="{{$product->default_image}}" class="selected_image_remove">X</b>
                                      </span>
                                   </p>
                                @endif

                               </div>
                          </div>
                          <div class="form-group row ">
                             <div class="col-sm-3"><label class="col-form-label">Product Image Gallery</label></div>
                               <div class="col-sm-9">
                                  <button  type="button" data-image-width="800" data-image-height="800"  data-input-name="gallery_images" data-input-type="multiple" class="btn btn-success initConcaveMedia" >Select File</button>

                                  <p class="selected_images_gallery">
                                      @foreach(explode(',',$product->gallery_images) as $img)
                                         @if($img)
                                            <span>
                                               <input type="hidden" value="{{$img}}" name="gallery_images[]">
                                               <img src="{{'/'.$img}}"> <b data-file-url="{{$img}}" class="selected_image_remove">X</b>
                                            </span>
                                         @endif
                                      @endforeach
                                   </p>

                               </div>
                          </div>
                       </div>
                        <!-- Image Section Ends -->



                        <!-- SEO Section Starts -->
                        <div class="tab-pane fade" id="SEO" role="tabpanel">
                           <p class="content_title">SEO</p>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Slug</label>
                              <div class="col-sm-9">
                                 <input type="text"  name="slug" value="{{$product->slug}}" class="form-control" maxlength="2048" readonly/><br>
                                 <small class="hint_text">The maximum length of url title is about 2048 characters.</small>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Meta Title</label>
                              <div class="col-sm-9">
                                 <input type="text" name="meta_title" class="form-control" value="{{$product->meta_title}}" maxlength="60" ><br>
                                 <small class="hint_text">The ideal length of meta title is about 60 characters.</small>
                              </div>
                           </div>
                          
                           <div class="form-group row">
                             <label class="col-sm-3 col-form-label">Meta Keyword</label>
                             <div class="col-sm-9">
       
                                <input type="text" name="meta_keyword" class="form-control" value="{{App\Models\ProductMeta::where('product_id',$product->id)->where('meta_key','meta_keyword')->first()->meta_value ?? ''}}" ><br>
                                <small class="hint_text">It is a good practice to have kewords less than 10% of the total words of a page.</small>
                                
                             </div>
                          </div>

                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Meta Description</label>
                              <div class="col-sm-9">
                                 <textarea name="meta_description" class="form-control" maxlength="160">{{ App\Models\ProductMeta::where('product_id',$product->id)->where('meta_key','meta_description')->first()->meta_value ?? ''  }}</textarea><br>
                                 <small class="hint_text">The ideal length of meta description is about between 50 and 160 characters</small>
                                 
                              </div>
                           </div>
                        </div>
                        <!-- SEO Section Ends -->
                      

                        <!-- Product Sale Option  Starts -->
                        <div class="tab-pane fade" id="Specification" role="tabpanel">
                           <p class="content_title">Product Sale Option</p>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Product Set</label>
                              <div class="col-sm-9">
                                 <div class="input-group">
                                    @php
                                       $product_sale_option_meta = App\Models\ProductMeta::where('product_id',$product->id)->where('meta_key','product_sale_option')->first();
                                    @endphp
                                    @if($product_sale_option_meta)
                                    <select id="product_sale_option" name="product_sale_option"  class="form-control">
                                       <option value="-1">-- Select Product Set --</option>
                                       <option value="digital" @if($product_sale_option_meta->meta_value =='digital' ) selected  @endif >Digital</option>
                                       <option value="downloadable"  @if($product_sale_option_meta->meta_value =='downloadable' ) selected  @endif >Downloadable</option>
                                    </select>
<<<<<<< HEAD
                                    @endif
=======
                                     @endif
>>>>>>> 4725b6ac07b908d2eafef65822f8f592d352c5b0
                                 </div>
                              </div>
                           </div>

                           <div class="form-group row downloadable_file_section">
                              <label class="col-sm-3 col-form-label">Product File</label>
                              <div class="col-sm-9">
                                 <div class="input-group">
                                    @php
                                       $downloadable_file = App\Models\ProductMeta::where('product_id',$product->id)->where('meta_key','product_downloadable_file')->first();
                                    @endphp

                                    @if($downloadable_file)
                                       <p style="width: 100%;"><a href="{{'/products/downloadable/'.$downloadable_file->meta_value}}">{{$downloadable_file->meta_value}}</a></p>
                                    @endif

                                    <p><input type="file" name="downloadable_file"> OR</p>

                                 </div>
                              </div>
                           </div>
                           <div class="form-group row downloadable_file_section">
                              <label class="col-sm-3 col-form-label">Product File Url</label>
                              <div class="col-sm-9">
                                 <div class="input-group">
                                    @php
                                       $downloadable_file_url = App\Models\ProductMeta::where('product_id',$product->id)->where('meta_key','product_downloadable_file_url')->first();
                                    @endphp
<<<<<<< HEAD
                                    @if($downloadable_file_url)
=======
                                    @if($product_sale_option_meta)
>>>>>>> 4725b6ac07b908d2eafef65822f8f592d352c5b0
                                    <input type="text" class="form-control" name="downloadable_file_url" value="{{$downloadable_file_url->meta_value}}" placeholder="File Url">
                                    @endif
                                 </div>
                              </div>
                           </div>

                        </div>
                        <!-- Product Sale Option  Ends -->

                    
                        <p class="text-right submit_button"> <button type="submit" class="btn btn-primary">Update Product</button> </p>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
