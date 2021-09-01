<?php
namespace App\Providers;
use Collective\Html\FormFacade as Form;
use Collective\Html\HtmlFacade as Html; 
use Illuminate\Support\ServiceProvider;

class AdminFormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(){        
    }
    /**
     * Bootstrap services.
     *
     * @return void 
     */
    public function boot() 
    {  
        Form::component('cbText', 'admin.components.form.text', ['name', 'value'=>null, 'attributes' => ['class' => 'form-control'] ]);
        Form::component('cbPassword', 'admin.components.form.password', ['name',  'attributes' => ['class' => 'form-control'] ]);
        Form::component('cbEmail', 'admin.components.form.email', ['name', 'value'=>null, 'attributes' => ['class' => 'form-control'] ]);
        Form::component('cbFile', 'admin.components.form.file', ['name',   'attributes' => ['class' => 'form-control'] ]);
        Form::component('cbNumber', 'admin.components.form.number', ['name', 'value'=>null, 'attributes' => ['class' => 'form-control'] ]);
        Form::component('cbDate', 'admin.components.form.date', ['name', 'value'=>null, 'attributes' => ['class' => 'form-control'] ]);
        Form::component('cbSelect', 'admin.components.form.select', ['name', 'list'=>[] ,'value'=>null, 'attributes' => ['class' => 'form-control'], 'placeholder' => ['placeholder'=>'Please Select'] ]);
        Form::component('cbSelectRange', 'admin.components.form.selectRange', ['name', 'min', 'max' , 'value'=>null, 'attributes' => ['class' => 'form-control'] ]);
        Form::component('cbSelectMonth', 'admin.components.form.selectMonth', ['name', 'value'=>null, 'attributes' => ['class' => 'form-control'] ]);
        Form::component('cbTextarea', 'admin.components.form.textarea', ['name', 'value'=>null, 'attributes' => ['class' => 'form-control'] ]);
        Form::component('cbEditor', 'admin.components.form.editor', ['name', 'value'=>null, 'attributes' => ['class' => 'form-control'] ]);
        Form::component('cbRelationMultipleSelect', 'admin.components.form.relationmultiple', ['name', 'list'=>[] ,  'relation','item', 'attributes' => ['class' => 'form-control'] ]);
        Form::component('cbRelationMultipleCheckbox', 'admin.components.form.relationmultiplecheckbox', ['name', 'list'=>[] ,  'relation','item','inline'=>false, 'switch'=>false, 'attributes' => ['class' => 'custom-control-input'] ]);
        Form::component('cbImage', 'admin.components.form.image', ['name', 'multiple','item', 'context'  ]);
        Form::component('cbButtons', 'admin.components.form.buttons', ['submitButtonText', 'clearButtonText' , 'attributes' => [] ]);
        Form::component('cbSubmit', 'admin.components.form.submit', ['name', 'attributes' => ['class' => 'form-control'] ]);
        Form::component('cbCheckbox', 'admin.components.form.checkbox', ['name','value'=>null, 'selected'=>null ,'attributes' => ['class' => 'custom-control-input'] ]);
        Form::component('cbCheckboxMultiple', 'admin.components.form.checkboxMultiple', ['name','list'=>[],'selected'=>[],'inline'=>false, 'switch'=>false ,'attributes' => ['class' => 'custom-control-input'] ]);
        Form::component('cbRadioList', 'admin.components.form.radioList', ['name','list'=>[],'selected'=>[],'inline'=>false,'attributes' => ['class' => 'custom-control-input'] ]);
        Form::component('cbMediaImage', 'admin.components.form.mediaImage', ['name','value'=>null,'attributes' => ['class' => 'form-control'] ]);

         
        Form::component('cbParamText', 'admin.components.form.param.text', ['name', 'value'=>null, 'attributes' => ['class' => 'form-control'] ]);


        

    }
}
