{meta_html js $j_basepath.'mapBuilder/js/mapbuilderadminpreview.js'}

{jmessage_bootstrap}

<h1>{@mapBuilderAdmin~admin.menu.configuration.label@}</h1>

<div id="map" style="width: 500px;height: 500px"></div>
{formdatafull $form}

<!-- Modify -->
{ifacl2 'lizmap.admin.services.update'}
<div class="form-actions">
    <a class="btn" href="{jurl 'mapBuilderAdmin~config:modify'}">
        {@admin~admin.configuration.button.modify.service.label@}
    </a>
</div>
{/ifacl2}