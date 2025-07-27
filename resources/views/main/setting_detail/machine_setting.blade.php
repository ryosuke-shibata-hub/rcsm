<h1 class="font-medium text-1xl">Chassis Setting</h1>
<div class="mt-8 grid lg:grid-cols-8 gap-10">
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">FrontCamber</label>
        <p class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->camber_angle_f }}
        </p>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">RearCamber</label>
        <p class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->camber_angle_r }}
        </p>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">FrontToe</label>
        <p class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->toe_angle_f }}
        </p>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">RearToe</label>
        <p class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->toe_angle_r }}
        </p>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">FrontCater</label>
        <p class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->caster_angle_f }}
        </p>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">RearCater</label>
        <p class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->caster_angle_r }}
        </p>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">FrontSkid</label>
        <p class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->skid_angle_f }}
        </p>
    </div>

    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">RearSkid</label>
        <p class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->skid_angle_r }}
        </p>
    </div>
</div>
<div class="mt-8 grid lg:grid-cols-6 gap-8">
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">FrontDumperSpring</label>
        <p class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->dumper_spring_f }}
        </p>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">RearDumperSpring</label>
        <p class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->dumper_spring_r }}
        </p>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">FrontDumperOil</label>
        <p class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            #{{ $targetSettingDetail->dumper_oil_f }}
        </p>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">RearDumperOil</label>
        <p class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            #{{ $targetSettingDetail->dumper_oil_r }}
        </p>
    </div>
        <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">FrontHeight</label>
        <p class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->height_f }}mm
        </p>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">RearHeight</label>
        <p class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->height_r }}mm
        </p>
    </div>
</div>
<div class="mt-8 grid lg:grid-cols-6 gap-8">
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">PinionGear</label>
        <p class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->pinion_gear }}
        </p>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">SpurGear</label>
        <p class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->spur_gear }}
        </p>
    </div>
    <div>
        <label class="text-sm text-gray-700 block mb-1 font-medium">GearRatio</label>
        <p class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
            {{ $targetSettingDetail->gear_ratio }}
        </p>
    </div>
</div>
