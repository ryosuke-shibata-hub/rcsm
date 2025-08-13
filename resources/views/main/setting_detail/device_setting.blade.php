<h1 class="font-medium text-1xl">Device List</h1>
<div class="mt-8 grid lg:grid-cols-4 gap-8">
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">Transmitter</label>
        <p class="bg-gray-50 border border-gray-200 rounded inputy-1 inputx-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full p-1">
            {{ $targetSettingDetail->transmitter }}
        </p>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">Receiver</label>
        <p class="bg-gray-50 border border-gray-200 rounded inputy-1 inputx-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full p-1">
            {{ $targetSettingDetail->receiver }}
        </p>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">Esc</label>
        <p class="bg-gray-50 border border-gray-200 rounded inputy-1 inputx-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full p-1">
            {{ $targetSettingDetail->esc }}
        </p>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">Servo</label>
        <p class="bg-gray-50 border border-gray-200 rounded inputy-1 inputx-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full p-1">
            {{ $targetSettingDetail->servo }}
        </p>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">Gyro</label>
        <p class="bg-gray-50 border border-gray-200 rounded inputy-1 inputx-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full p-1">
            {{ $targetSettingDetail->gyro }}
        </p>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">Motor</label>
        <p class="bg-gray-50 border border-gray-200 rounded inputy-1 inputx-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full p-1">
            {{ $targetSettingDetail->motor }}
        </p>
    </div>
</div>
