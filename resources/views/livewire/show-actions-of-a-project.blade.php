<div class="flex flex-col justify-between gap-y-8">
    <div>
        <p style="color: {{ $project->responsibility->color }};" class="text-3xl lg:text-5xl font-bold"> {{ $projectCompletionRounded }} % </p>
    </div>
    <div>
        <div class="h-100 w-100 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="col-start-1 flex flex-col gap-y-4">
                <h3 class="text-xl">{{ __('To do') }}</h3>
                @forelse ($actions as $action)
                    @if ($action->context_id == 1)
                        <div style="outline-style: solid;
                                        outline-color: {{ $project->responsibility->color }};  outline-width: medium;"
                            class="px-4 py-2 bg-white overflow-hidden shadow-xl sm:rounded-lg min-w-full flex flex-row items-center justify-between">
                            <a href="">
                                <p class="">{{ $action->description }}</p>
                            </a>
                            <div class="flex flex-row">
                                <button wire:click="startAction({{ $action->id }})" class="icon">
                                    <x-icon imgPath="{{ asset('images/start.png') }}" />
                                </button>
                                <a href="{{ route('editAction', $action->id) }}">
                                    <x-icon imgPath="{{ asset('images/edit.png') }}" />
                                </a>
                                <button wire:click="remove({{ $action->id }})" class="icon">
                                    <x-icon imgPath="{{ asset('images/delete.png') }}" />
                                </button>
                            </div>
                        </div>
                    @endif
                @empty
                    <div
                        class="px-10 bg-white overflow-hidden shadow-xl sm:rounded-lg min-w-full h-40 flex flex-row items-center justify-between">
                        <p class="modelTitle">{{ __('you have no action') }}</p>
                    </div>
                @endforelse
            </div>
            <div class="flex flex-col gap-y-4">
                <h3 class="text-xl">{{ __('Doing') }}</h3>
                @forelse ($actions as $action)
                    @if ($action->context_id == 2)
                        <div style="outline-style: solid;
                                        outline-color: {{ $project->responsibility->color }};  outline-width: medium;"
                            class="px-4 py-2 bg-white overflow-hidden shadow-xl sm:rounded-lg min-w-full flex flex-row items-center justify-between">
                            <a href="">
                                <p class="">{{ $action->description }}</p>
                            </a>
                            <div class="flex flex-row">
                                <button wire:click="actionIsDone({{ $action->id }})" class="icon">
                                    <x-icon imgPath="{{ asset('images/done.png') }}" />
                                </button>
                                <a href="{{ route('editAction', $action->id) }}">
                                    <x-icon imgPath="{{ asset('images/edit.png') }}" />
                                </a>
                                <button wire:click="remove({{ $action->id }})" class="icon">
                                    <x-icon imgPath="{{ asset('images/delete.png') }}" />
                                </button>
                            </div>
                        </div>
                    @endif
                @empty
                    <div
                        class="px-10 bg-white overflow-hidden shadow-xl sm:rounded-lg min-w-full h-40 flex flex-row items-center justify-between">
                        <p class="modelTitle">{{ __('you have no action') }}</p>
                    </div>
                @endforelse
            </div>
            <div class="flex flex-col gap-y-4">
                <h3 class="text-xl">{{ __('Done') }}</h3>

                @forelse ($actions as $action)
                    @if ($action->context_id == 3)
                        <div style="outline-style: solid;
                                        outline-color: {{ $project->responsibility->color }};  outline-width: medium;"
                            class="px-4 py-2 bg-white overflow-hidden shadow-xl sm:rounded-lg min-w-full flex flex-row items-center justify-between">
                            <a href="">
                                <p class="line-through">{{ $action->description }}</p>
                            </a>
                            <div class="flex flex-row">
                                <a href="{{ route('editAction', $action->id) }}">
                                    <x-icon imgPath="{{ asset('images/edit.png') }}" />
                                </a>
                                <button wire:click="remove({{ $action->id }})" class="icon">
                                    <x-icon imgPath="{{ asset('images/delete.png') }}" />
                                </button>
                            </div>
                        </div>
                    @endif
                @empty
                    <div
                        class="px-10 bg-white overflow-hidden shadow-xl sm:rounded-lg min-w-full h-40 flex flex-row items-center justify-between">
                        <p class="modelTitle">{{ __('you have no action') }}</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

</div>
