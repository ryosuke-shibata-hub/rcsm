<h1 class="font-medium text-1xl">Device List</h1>
<div class="mt-8 grid lg:grid-cols-6 gainput-8">
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">Transmitter</label>
        <input class="bg-gray-50 border border-gray-200 rounded inputy-1 inputx-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->transmitter }}
        </input>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">Receiver</label>
        <input class="bg-gray-50 border border-gray-200 rounded inputy-1 inputx-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->receiver }}
        </input>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">Esc</label>
        <input class="bg-gray-50 border border-gray-200 rounded inputy-1 inputx-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->esc }}
        </input>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">Servo</label>
        <input class="bg-gray-50 border border-gray-200 rounded inputy-1 inputx-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->servo }}
        </input>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">Gyro</label>
        <input class="bg-gray-50 border border-gray-200 rounded inputy-1 inputx-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->gyro }}
        </input>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">Motor</label>
        <input class="bg-gray-50 border border-gray-200 rounded inputy-1 inputx-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->motor }}
        </input>
    </div>
</div>
