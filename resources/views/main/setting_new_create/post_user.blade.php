<h1 class="font-medium text-1xl">Post User</h1>
<div class="mt-8 grid lg:grid-cols-1 gap-10">
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">PostName<span class="text-xs text-red-600">※</span></label>
        <input
            required
            name="PostName"
            class="bg-gray-50 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
        </input>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">Comment<span class="text-xs text-red-600">※</span></label>
        <textarea
            required
            name="Comment"
            class="bg-gray-50 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"></textarea>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">SettingImg</label>
        <input
            name="SettingImg"
            type="file" class="bg-gray-50 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
        </input>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">Category</label>
        <div>
                <select
                    name="Category"
                    class="bg-gray-50 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                >
                    <option class="bg-gray-50 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">カテゴリーを選択</option>
                    @foreach($settingCategory as $settingCategory => $value)
                        <option value={{ $value }}>{{ $settingCategory }}</option>
                    @endforeach
                </select>
        </div>
    </div>
</div>
