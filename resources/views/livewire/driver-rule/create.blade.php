<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('driverRule.enable') ? 'invalid' : '' }}">
        <input class="form-control" type="checkbox" name="enable" id="enable" wire:model.defer="driverRule.enable">
        <label class="form-label inline ml-1" for="enable">{{ trans('cruds.driverRule.fields.enable') }}</label>
        <div class="validation-message">
            {{ $errors->first('driverRule.enable') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.driverRule.fields.enable_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('driverRule.is_deleted') ? 'invalid' : '' }}">
        <input class="form-control" type="checkbox" name="is_deleted" id="is_deleted" wire:model.defer="driverRule.is_deleted">
        <label class="form-label inline ml-1" for="is_deleted">{{ trans('cruds.driverRule.fields.is_deleted') }}</label>
        <div class="validation-message">
            {{ $errors->first('driverRule.is_deleted') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.driverRule.fields.is_deleted_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('driverRule.name') ? 'invalid' : '' }}">
        <label class="form-label" for="name">{{ trans('cruds.driverRule.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" wire:model.defer="driverRule.name">
        <div class="validation-message">
            {{ $errors->first('driverRule.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.driverRule.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.driver_rule_image') ? 'invalid' : '' }}">
        <label class="form-label" for="image">{{ trans('cruds.driverRule.fields.image') }}</label>
        <x-dropzone id="image" name="image" action="{{ route('admin.driver-rules.storeMedia') }}" collection-name="driver_rule_image" max-file-size="2" max-width="4096" max-height="4096" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.driver_rule_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.driverRule.fields.image_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.driver-rules.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>