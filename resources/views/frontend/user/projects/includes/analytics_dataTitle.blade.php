<div class="data-title-bar">
    <h2 class="title">{{\App\Models\Projects::where('id',$project_id)->first()->url}}</h2>
    <div class="option-block">
        <a href="{{\App\Models\Projects::where('id',$project_id)->first()->url}}" target="_blank" class="open">
            <div class="text">Open</div>
            <i class="bi bi-box-arrow-up-right"></i>
        </a>
        <input type="text" id="dateRange" value="01/01/2018 - 01/15/2018" />
    </div>
</div>