<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Le champ :attribute doit être accepté.',
    'active_url' => 'Le champ :attribute n‘est pas une URL valide.',
    'after' => 'Le champ :attribute doit être une date postérieure au :date.',
    'alpha' => 'Le champ :attribute doit seulement contenir des lettres.',
    'alpha_dash' => 'Le champ :attribute doit seulement contenir des lettres, des chiffres et des tirets.',
    'alpha_num' => 'Le champ :attribute doit seulement contenir des chiffres et des lettres.',
    'after_or_equal' => 'le champ :attribute doit contenir une date comprise entre :date et aujourd‘hui.',
    'array' => 'Le champ :attribute doit être un tableau.',
    'before' => 'Le champ :attribute doit être une date antérieure au :date.',
    'before_or_equal' => 'Le champ :attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'numeric' => 'La valeur de :attribute doit être comprise entre :min et :max.',
        'file' => 'Le fichier :attribute doit avoir une taille entre :min et :max kilobytes.',
        'string' => 'Le texte :attribute doit avoir entre :min et :max caractères.',
    ],
    'boolean' => 'Le champ :attribute doit être un booléen.',
    'confirmed' => 'Le champ de confirmation :attribute ne correspond pas.',
    'date' => 'Le champ :attribute n‘est pas une date valide.',
    'date_format' => 'Le champ :attribute ne correspond pas au format :format.',
    'different' => 'Les champs :attribute et :other doivent être différents.',
    'digits' => 'Le champ :attribute doit avoir :digits chiffres.',
    'digits_between' => 'Le champ :attribute doit avoir entre :min and :max chiffres.',
    'dimensions' => 'Le champ :attribute a une dimension non conforme.',
    'email' => 'Le format du champ :attribute est invalide.',
    'exists' => 'Le champ :attribute sélectionné est invalide.',
    'file' => 'Le champ :attribute doit être un fichier.',
    'image' => 'Le champ :attribute doit être une image.',
    'in' => 'Le champ :attribute est invalide.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'Le champ :attribute doit être un entier.',
    'ip' => 'Le champ :attribute doit être une adresse IP valide.',
    'max' => [
        'numeric' => 'La valeur de :attribute ne peut être supérieure à :max.',
        'file' => 'Le fichier :attribute ne peut être plus gros que :max kilobytes.',
        'string' => 'Le texte de :attribute ne peut contenir plus de :max caractères.',
    ],
    'mimes' => 'Le champ :attribute doit être un fichier de type : :values.',
    'min' => [
        'numeric' => 'La valeur de :attribute doit être inférieure à :min.',
        'file' => 'Le fichier :attribute doit être plus que gros que :min kilobytes.',
        'string' => 'Le texte :attribute doit contenir au moins :min caractères.',
    ],
    'not_in' => 'Le champ :attribute sélectionné n‘est pas valide.',
    'numeric' => 'Le champ :attribute doit contenir un nombre.',
    'password' => 'Mot de passe incorrect.',
    'regex' => 'Le format du champ :attribute est invalide.',
    'required' => 'Le champ :attribute est obligatoire.',
    'required_if' => 'Le champ :attribute est obligatoire quand la valeur de :other est :value.',
    'required_with' => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'Le champ :attribute est obligatoire quand :values n‘est pas présent.',
    'same' => 'Les champs :attribute et :other doivent être identiques.',
    'size' => [
        'numeric' => 'La taille de la valeur de :attribute doit être :size.',
        'file' => 'La taille du fichier de :attribute doit être de :size kilobytes.',
        'string' => 'Le texte de :attribute doit contenir :size caractères.',
    ],
    'string' => 'Le champ :attribute doit être du texte.',
    'unique' => 'La valeur du champ :attribute est déjà utilisée.',
    'uploaded' => 'Le champ :attribute a échoué.',
    'url' => 'Le format de l‘URL de :attribute n‘est pas valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention 'attribute.rule' to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as 'E-Mail Address' instead
    | of 'email'. This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'product_name' => 'nom du produit',
        'product_description' => 'description du produit',
        'product_price' => 'prix du produit',
        'product_image' => 'image de présentation du produit',
    ],

];
