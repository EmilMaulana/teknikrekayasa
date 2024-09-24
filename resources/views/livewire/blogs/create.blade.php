<div>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">      
        <div class="w-full overflow-x-auto">
            <section class="bg-white dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto">
                    <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new article</h2>
                    <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="w-full">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" >Title</label>
                            <input name="title" value="{{ old('title') }}" class="  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type title">
                            @error('title')
                                <div class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    <span class="font-medium">Oh, snapp!</span> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-5">
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                <select wire:model="category" name="category_id" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected="">Select category</option>
                                    @foreach ($category_id as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    <span class="font-medium">Oh, snapp!</span> {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="default_size">Image</label>
                                <input wire:model="image" name="image" value="{{ old('image') }}" id="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="default_size" type="file">
                                @error('image')
                                    <div class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        <span class="font-medium">Oh, snapp!</span> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
                            <textarea wire:model="body" name="body" id="myeditor" rows="4" class="" placeholder="Leave a comment...">{{ old('body') }}</textarea>
                            @error('body')
                                <div class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    <span class="font-medium">Oh, snapp!</span> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mt-10">
                            <button type="submit" wire:click="" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                                SUBMIT
                            </button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>

