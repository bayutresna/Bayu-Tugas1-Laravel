
<div class="card border-[1px] " style="width: 18rem;">
  <img src="{{ asset($user['foto']) }}" class="card-img-top" alt="...">
  <div class="card-body px-[10px] bg-slate-400/30">
    <h5 class="card-title text-center text-[24px] font-[700] uppercase ">{{$user['nama']}}</h5>
    <div class="konten text-[18px] font-[500] py-[20px]>
        <p class="card-text"><b>Bio = </b> {{$user['bio']}}</p>
        <p class="card-text"><b>Alamat = </b> {{$user['alamat']}}</p>
        <p class="card-text"><b>Status = </b> {{$user['active']}}</p>
        <p class="card-text"><b>Role = </b> {{$user['role']}} {!!$icon!!}</p>
    </div>
  </div>
</div>
