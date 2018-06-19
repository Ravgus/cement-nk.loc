<div id="3" class="row products">
    <div class="col-1 dn"></div>
    <div class="col-lg-7 col-md-12">
        <div class="number">
            <div class="nm">03</div>
        </div>
        <div class="title">{{ $content->title }}</div>
    </div>
</div>

@foreach($products as $product)
    @if($product->id == 1)
        <div class="row">
            <div class="col-1 dn"></div>
            <div class="col-lg-6">
                <div class="item_consistency">
                    <div class="top_block">
                        <div class="item_title">Известь</div>
                        <img src="img/item_1-1.png" alt="image">
                    </div>
                    <div class="top_block">
                        <div class="item_title">Диоксид кремния</div>
                        <img src="img/item_1-2.png" alt="image">
                    </div>
                    <div class="top_block bottom">
                        <div class="item_title">Алюминий</div>
                        <img src="img/item_1-3.png" alt="image">
                    </div>
                    <div class="top_block bottom">
                        <div class="item_title">Гипс, оксид железа</div>
                        <img src="img/item_1-4.png" alt="image">
                    </div>
                    <div class="romb_title">
                        <div class="nm">{{ $product->title }}</div>
                    </div>
                </div>
            </div>
    @elseif($product->id == 2)
        <div class="row">
            <div class="col-1"></div>
            <div class="col-1 dn"></div>
            <div class="col-lg-6">
                <div class="item_consistency">
                    <div class="top_block">
                        <div class="item_title">Цемент</div>
                        <img src="img/item_2-1.png" alt="image">
                    </div>
                    <div class="top_block">
                        <div class="item_title">Вода</div>
                        <img src="img/item_2-2.png" alt="image">
                    </div>
                    <div class="top_block bottom">
                        <div class="item_title">Песок</div>
                        <img src="img/item_2-3.png" alt="image">
                    </div>
                    <div class="top_block bottom">
                        <div class="item_title">Щебень</div>
                        <img src="img/item_2-4.png" alt="image">
                    </div>
                    <div class="romb_title">
                        <div class="nm">{{ $product->title }}</div>
                    </div>
                </div>
            </div>
    @elseif($product->id == 3)
        <div class="row">
            <div class="col-1 dn"></div>
            <div class="col-lg-6">
                <div class="item_consistency">
                    <div class="top_block">
                        <img src="img/item_3-1.png" alt="image">
                    </div>
                    <div class="top_block">
                        <img src="img/item_3-2.png" alt="image">
                    </div>
                    <div class="top_block bottom">
                        <img src="img/item_3-3.png" alt="image">
                    </div>
                    <div class="top_block bottom">
                        <img src="img/item_3-4.png" alt="image">
                    </div>
                    <div class="romb_title">
                        <div class="nm">{{ $product->title }}</div>
                    </div>
                </div>
            </div>
    @else
        </div>
    @endif
            <div class="col animated_2">
                <div class="title_item_consistency">{{ $product->title }}</div>
                <div class="separator_item_consistency"></div>
                <div class="text_item_consistency">
                    {!! $product->text !!}
                </div>
            </div>
        </div>
@endforeach



