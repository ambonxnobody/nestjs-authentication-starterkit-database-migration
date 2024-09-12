<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\I18n;
use App\Models\Language;
use App\Models\Translation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class I18nSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languageEnUs = Language::where('locale', 'en_US')->first();
        $languageId = Language::where('locale', 'id_ID')->first();

        foreach ($models as $key => $model) {
            $i18nName = I18n::create();

            Translation::create([
                'i18n_id' => $i18nName->id,
                'language_locale' => $languageEnUs->locale,
                'value' => $model['value'],
            ]);

            Translation::create([
                'i18n_id' => $i18nName->id,
                'language_locale' => $languageId->locale,
                'value' => $modelsId[$key]['value'],
            ]);

            Model::create([
                'i18n_name' => $i18nName->id,
                'code' => $model['code'],
            ]);
        }
    }
}
