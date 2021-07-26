
<div class="panel panel-default" style="z-index: 9999">
    <div class="panel-body">
        <form>
            <div class="modal-body">
                <div class="form-group">
                  <label for="title">Title {{ $title }}</label>
                  <input type="text" class="form-control"  name="title" wire:model='title' id="title" aria-describedby="help-title" >
                  @error('title')<span class="text-red-500"></span>@enderror
                </div>

                <div class="form-group">
                  <label for="description">Content</label>
                  <textarea class="form-control"  name="description" wire:model='description' id="description" rows="3"></textarea>
                  @error('description')<span class="text-red-500"></span>@enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click='clearForm()' class="btn btn-secondary">Close</button>
                <button  type="button" wire:click.prevent='store()' class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>


