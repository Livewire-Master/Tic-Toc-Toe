<div class="flex flex-col gap-8">
    @foreach($this->configs as $identifier => $config)
        <x-dashboard.game.config.tab
            :title="$config['title']"
            :identifier="$identifier"
            method="selectConfig"
            :hint="$config['hint']"
            :selector="$config_data"
            key_prefix="{{ $identifier }}--"
            :options="$config['pairs']"
        />
    @endforeach
</div>
