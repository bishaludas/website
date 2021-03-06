{{-- title --}}
<div class="form-group">
    <div class="row">
        <div class="col-md-10">
            {!! Form::label('project_title', 'Project Title :', ['class'=>'font-weight-bold']) !!}
            {!! Form::text('project_title', null, ['class'=>'form-control', 'autocomplete'=>'off']) !!}
            @if ($errors->has('project_title'))
            <span class="text-danger">{{$errors->first('project_title')}}</span> 
            @endif
        </div>
    </div>
</div>

{{-- url --}}
<div class="form-group">
    <div class="row">
        <div class="col-md-10">
            {!! Form::label('project_url', 'Project URL :', ['class'=>'font-weight-bold']) !!}
            {!! Form::text('project_url', null, ['class'=>'form-control', 'autocomplete'=>'off']) !!}
            @if ($errors->has('project_url'))
            <span class="text-danger">{{$errors->first('project_url')}}</span> 
            @endif
        </div>
    </div>
</div>

{{-- image --}}
<div class="form-group">
    <div class="row">
        <div class="col-md-10">
            {!! Form::label('project_image', 'Project Image :', ['class'=>'font-weight-bold']) !!}
            {!! Form::file('project_image[]', ['multiple'=>'multiple']) !!}
            @if ($errors->has('project_image'))
            <span class="text-danger">{{$errors->first('project_url')}}</span> 
            @endif
        </div>
    </div>
</div>

{{-- Body --}}
<div class="form-group">
    <div class="row">
        <div class="col-lg-12">
            {!! Form::label('project_body', 'Details', ['class'=>'font-weight-bold']) !!}
            <br>
            @if ($errors->has('project_body'))
            <span class="text-danger">{{$errors->first('project_body')}}</span> 
            @endif
            {!! Form::textarea('project_body', null, ['class'=>'form-control tiny_mce']) !!}
        </div>
    </div>
</div>