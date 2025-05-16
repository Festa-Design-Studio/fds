<div class="space-y-6">
    <div>
        <x-core.input-label for="name" value="Name" />
        <x-core.text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $category->name ?? '')" required autofocus />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-core.input-label for="slug" value="Slug (auto-generated if blank)" />
        <x-core.text-input id="slug" name="slug" type="text" class="mt-1 block w-full" :value="old('slug', $category->slug ?? '')" />
        <x-input-error :messages="$errors->get('slug')" class="mt-2" />
    </div>

    <div>
        <x-core.input-label for="description" value="Description" />
        <x-core.textarea id="description" name="description" class="mt-1 block w-full" rows="3">{{ old('description', $category->description ?? '') }}</x-core.textarea>
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
    </div>

    <div>
        <x-core.input-label for="color_class" value="Category Color" />
        <select id="color_class" name="color_class" class="mt-1 block w-full">
            <option value="">No color</option>
            @foreach (config('blog_category_colors') as $key => $color)
                <option value="{{ $color['class'] }}" @if(old('color_class', $category->color_class ?? '') == $color['class']) selected @endif>
                    {{ $color['label'] }}
                </option>
            @endforeach
        </select>
        <div class="flex gap-2 mt-2">
            @foreach (config('blog_category_colors') as $color)
                <span class="inline-block w-6 h-6 rounded {{ $color['class'] }} border border-gray-200" title="{{ $color['label'] }}"></span>
            @endforeach
        </div>
        <x-input-error :messages="$errors->get('color_class')" class="mt-2" />
    </div>
</div> 