<p>
    <a class="btn btn-success" data-toggle="collapse" href="#collapse{{$okr['objective']->id}}" role="button" aria-expanded="false" aria-controls="collapse{{$okr['objective']->id}}">
        新增KR
    </a>
</p>
<div class="collapse" id="collapse{{$okr['objective']->id}}">
    <div class="card card-body mr-5">
        <form method="POST" action="{{route('okrs.storeKR')}}">
                @csrf
            <div class="form-row">
                <input type="hidden" class="form-control" name="krs_owner" id="keyresult_owner" value="{{$okr['objective']->id}}">
                <div class="form-group col-md-12">
                    <label for="keyresult_title">關鍵指標(KeyResult) <strong class="text-danger">{{ $errors->first('krs_title') }}</strong>  </label>
                    <input type="text" class="form-control" name="krs_title" id="keyresult_title" value="{{old('krs_title')}}">
                </div>
                <div class="form-group col-md-2">
                    <label for="keyresult_weight">權重  <strong class="text-danger">{{ $errors->first('krs_weight') }}</strong> </label>
                    <input type="number" class="form-control" name="krs_weight" id="keyresult_weight" value="{{old('krs_weight') ? old('krs_weight') : '1'}}">
                </div>
                <div class="form-group col-md-2">
                    <label for="keyresult_confidence">信心值 <strong class="text-danger">{{ $errors->first('krs_conf') }}</strong></label>
                    <input type="number" class="form-control" name="krs_conf" id="keyresult_confidence" value="{{old('krs_conf') ? old('krs_conf') : '5'}}">
                </div>
                <div class="form-group col-md-2">
                    <label for="keyresult_initaial">起始值  <strong class="text-danger">{{ $errors->first('krs_init') }}</strong></label>
                    <input type="number" class="form-control" name="krs_init" id="keyresult_initaial" value="{{old('krs_init') ? old('krs_init') : '0'}}">
                </div>
                <div class="form-group col-md-2">
                    <label for="keyresult_target">目標值 <strong class="text-danger">{{ $errors->first('krs_tar') }}</strong></label>
                    <input type="number" class="form-control" name="krs_tar" id="keyresult_target" value="{{old('krs_tar')}}">
                </div>
                <div class="form-group col-md-2">
                    <label for="keyresult_target">當前值 <strong class="text-danger">{{ $errors->first('krs_now') }}</strong></label>
                    <input type="number" class="form-control" name="krs_now" id="keyresult_now" value="{{old('krs_now') ? old('krs_now') : '0'}}">
                </div>
                <button class="btn btn-primary mt-4 mb-2" type="submit">新增</button>  
            </div>
        </form>
    </div>
</div>  

