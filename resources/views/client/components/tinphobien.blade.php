@foreach ($tinphobien as $t)
<li>
    <figure>
        <a href="{{url('chitiet',$t->id)}}"><img
                src="/layout/images/postimg/{{$t->anh}}"
                alt="image description" width="100px"></a>
    </figure>
    <div class="tg-trendingpostcontent">
        <h4><a href="{{url('chitiet',$t->id)}}">{{$t->name}}</a>
        </h4>
        <span class="tg-postviews">{{$t->luotxem}}lượt xem</span>
    </div>
</li>
 
@endforeach
