<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('service.admin_commission') ? 'invalid' : '' }}">
        <label class="form-label" for="admin_commission">{{ trans('cruds.service.fields.admin_commission') }}</label>
        <input class="form-control" type="text" name="admin_commission" id="admin_commission" wire:model.defer="service.admin_commission">
        <div class="validation-message">
            {{ $errors->first('service.admin_commission') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.service.fields.admin_commission_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('service.enable') ? 'invalid' : '' }}">
        <input class="form-control" type="checkbox" name="enable" id="enable" wire:model.defer="service.enable">
        <label class="form-label inline ml-1" for="enable">{{ trans('cruds.service.fields.enable') }}</label>
        <div class="validation-message">
            {{ $errors->first('service.enable') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.service.fields.enable_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('service.intercity_type') ? 'invalid' : '' }}">
        <input class="form-control" type="checkbox" name="intercity_type" id="intercity_type" wire:model.defer="service.intercity_type">
        <label class="form-label inline ml-1" for="intercity_type">{{ trans('cruds.service.fields.intercity_type') }}</label>
        <div class="validation-message">
            {{ $errors->first('service.intercity_type') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.service.fields.intercity_type_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('service.km_charge') ? 'invalid' : '' }}">
        <label class="form-label" for="km_charge">{{ trans('cruds.service.fields.km_charge') }}</label>
        <input class="form-control" type="text" name="km_charge" id="km_charge" wire:model.defer="service.km_charge">
        <div class="validation-message">
            {{ $errors->first('service.km_charge') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.service.fields.km_charge_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('service.offer_rate') ? 'invalid' : '' }}">
        <label class="form-label" for="offer_rate">{{ trans('cruds.service.fields.offer_rate') }}</label>
        <input class="form-control" type="text" name="offer_rate" id="offer_rate" wire:model.defer="service.offer_rate">
        <div class="validation-message">
            {{ $errors->first('service.offer_rate') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.service.fields.offer_rate_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('service.title') ? 'invalid' : '' }}">
        <label class="form-label" for="title">{{ trans('cruds.service.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" wire:model.defer="service.title">
        <div class="validation-message">
            {{ $errors->first('service.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.service.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.service_image') ? 'invalid' : '' }}">
        <label class="form-label" for="image">{{ trans('cruds.service.fields.image') }}</label>
        <x-dropzone id="image" name="image" action="{{ route('admin.services.storeMedia') }}" collection-name="service_image" max-file-size="2" max-width="4096" max-height="4096" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.service_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.service.fields.image_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>