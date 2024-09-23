<?php

return array(

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

    "accepted"                  => "O campo :attribute deve ser aceito.",
    "active_url"                => "O campo :attribute não é uma URL válida.",
    "after"                     => "O campo :attribute deve ser uma data depois de :date.",
    "alpha"                     => "O campo :attribute só pode conter letras.",
    "alpha_dash"                => "O campo :attribute só pode conter letras, números, traços e underscore (_).",
    "alpha_num"                 => "O campo :attribute só pode conter letras e números.",
    "array"                     => "O campo :attribute deve ser uma array.",
    "before"                    => "O campo :attribute deve ser uma data antes de :date.",
    "between"                   => array(
        "numeric" => "O campo :attribute deve estar entre :min and :max.",
        "file"    => "O campo :attribute deve estar entre :min and :max kilobytes.",
        "string"  => "O campo :attribute deve estar entre :min and :max caracteres.",
        "array"   => "The :attribute must have between :min and :max items.",
    ),
    "boolean"                   => "O campo :attribute deve ser verdadeiro ou falso.",
    "confirmed"                 => "A confirmação do campo :attribute não é válida.",
    "date"                      => "O campo :attribute não é uma data válida.",
    "date_format"               => "O campo :attribute não está no formato :format.",
    "different"                 => "O campo :attribute e :other devem ser diferentes.",
    "digits"                    => "O campo :attribute deve ter :digits dígitos.",
    "digits_between"            => "O campo :attribute deve estar entre :min and :max dígitos.",
    "email"                     => "O campo :attribute deve ser um email válido.",
    "exists"                    => "O campo selected :attribute é inválido.",
    "image"                     => "O campo :attribute deve ser uma imagem.",
    "in"                        => "O campo selected :attribute é inválido.",
    "integer"                   => "O campo :attribute deve ser um inteiro.",
    "ip"                        => "O campo :attribute deve ser um endereço de IP válido.",
    "max"                       => array(
        "numeric" => "The :attribute may not be greater than :max.",
        "file"    => "The :attribute may not be greater than :max kilobytes.",
        "string"  => "The :attribute may not be greater than :max characters.",
        "array"   => "The :attribute may not have more than :max items.",
    ),
    "mimes"                     => "O campo :attribute deve ser um arquivo do tipo: :values.",
    "min"                       => array(
        "numeric" => "The :attribute must be at least :min.",
        "file"    => "The :attribute must be at least :min kilobytes.",
        "string"  => "The :attribute must be at least :min characters.",
        "array"   => "The :attribute must have at least :min items.",
    ),
    "not_in"                    => "O campo selected :attribute é inválido.",
    "numeric"                   => "The :attribute must be a number.",
    "regex"                     => "O campo :attribute format é inválido.",
    "required"                  => "O campo :attribute é obrigatório.",
    "required_if"               => "O campo :attribute é obrigatório quando :other for :value.",
    "required_with"             => "O campo :attribute é obrigatório quando :values estiver presente.",
    "required_with_all"         => "O campo :attribute é obrigatório quando :values estiverem presentes.",
    "required_without"          => "O campo :attribute é obrigatório quando :values não estiver presente.",
    "required_without_all"      => "O campo :attribute é obrigatório quando nenhum de :values estiverem presentes.",
    "same"                      => "O campo :attribute e :other deve ser iguais.",
    "size"                      => array(
        "numeric" => "The :attribute must be :size.",
        "file"    => "The :attribute must be :size kilobytes.",
        "string"  => "The :attribute must be :size characters.",
        "array"   => "The :attribute must contain :size items.",
    ),
    "unique"                    => "O campo :attribute já está em uso.",
    "url"                       => "O formato de :attribute inválido.",
    "template_exists"           => "O :attribute selecionado é inválido.",
    "is_valid_captcha"          => "O captcha informado foi inválido. Tente novamente, por favor.",
    "user_password_strength"    => "O campo :attribute deve content_url :user_password_strength.",
    "operator_password_strength" => "O campo :attribute deve conter :operator_password_strength.",

    /*
     * 2.1.0
     */
    "logo"                      => "O logo deve apontar para uma imagem válida (URL direta ou caminho relativo).",

    /*
     * 2.2.0
     */
    "required_with_translation" => "A tradução :translation para :attribute é obrigatória quando :values estiver presente.",
    "max_translation"           => "A tradução :translation para :attribute não pode ser maior query :max caracteres.",
    "unique_translation"        => "A tradução :translation para :attribute já está em uso.",

    /*
     * 2.3.0
     */
    "required_translation"      => "A tradução :translation para :attribute é obrigatória.",
    "customfield_not_cyclic"    => "O campo não pode depender de um de seus filhos.",

    /*
     * 2.3.1
     */
    "is_slug"                   => "O slug só pode conter caracteres alfanuméricos, use encode com % para caracteres especiais.",
    "article_slug_unique"       => "O slug já está em uso.",
    "captcha_required"          => "O captcha é obrigatório.",
    "ticket_number_format"      => "O formato do número do ticket é inválido.",

    /*
     * 2.4.0
     */
    "after_or_equal"            => "O campo :attribute deve ser uma data depois ou igual a :date.",
    "before_or_equal"           => "O campo :attribute deve ser uma date antes ou igual a :date.",
    "dimensions"                => "O campo :attribute tem dimensões inválidas.",
    "distinct"                  => "O campo :attribute tem um valor duplicado.",
    "file"                      => "The :attribute must be a file.",
    "filled"                    => "O campo :attribute deve ter um valor.",
    "gt"                        => array(
        "numeric" => "The :attribute must be greater than :value.",
        "file"    => "The :attribute must be greater than :value kilobytes.",
        "string"  => "The :attribute must be greater than :value characters.",
        "array"   => "The :attribute must have more than :value items.",
    ),
    "gte"                       => array(
        "numeric" => "The :attribute must be greater than or equal :value.",
        "file"    => "The :attribute must be greater than or equal :value kilobytes.",
        "string"  => "The :attribute must be greater than or equal :value characters.",
        "array"   => "The :attribute must have :value items or more.",
    ),
    "in_array"                  => "O campo :attribute field does not exist in :other.",
    "ipv4"                      => "O campo :attribute deve ser um endereço IPv4 válido",
    "ipv6"                      => "O campo :attribute deve ser um endereço IPv6 válido.",
    "json"                      => "O campo :attribute deve ser uma string JSON válida.",
    "lt"                        => array(
        "numeric" => "The :attribute must be less than :value.",
        "file"    => "The :attribute must be less than :value kilobytes.",
        "string"  => "The :attribute must be less than :value characters.",
        "array"   => "The :attribute must have less than :value items.",
    ),
    "lte"                       => array(
        "numeric" => "The :attribute must be less than or equal :value.",
        "file"    => "The :attribute must be less than or equal :value kilobytes.",
        "string"  => "The :attribute must be less than or equal :value characters.",
        "array"   => "The :attribute must not have more than :value items.",
    ),
    "mimetypes"                 => "O campo :attribute deve ser um arquivo do tipo: :values.",
    "not_regex"                 => "O campo :attribute tem um formato inválido.",
    "present"                   => "O campo :attribute deve estar presente.",
    "required_unless"           => "O campo :attribute é requerido a menos que :other esteja em :values.",
    "string"                    => "The :attribute must be a string.",
    "timezone"                  => "O campo :attribute deve ser uma zona válida.",
    "uploaded"                  => "O campo :attribute falhou ao fazer upload.",

    /*
     * 2.5.0
     */
    "domain"                    => "Um ou mais dos nomes de domínio é inválido.",

    /*
     * 2.5.1
     */
    "valid_twig"                => "O campo :attribute é inválido. Por favor, use o botão de pré-visualização para detalhes do erro.",

    /*
     * 3.0.0
     */
    "embed_image"               => "O campo :attribute deve ser um tipo de arquivo: jpeg, png, or gif.",
    "starts_with"               => "O campo :attribute deve iniciar com um dos seguintes: :values.",

    /*
     * 3.5.0
     */
    "phone"                     => "The supplied phone number is invalid.",

    /*
     * 4.3.0
     */
    "is_invalid"                => "The :attribute is invalid.",

    /*
     * 5.0.0
     */
    "current_password"           => "The password is incorrect.",
    "department_email_per_brand" => "An email account must exist for each brand assigned to this department.",
    "department_has_a_priority"  => "Department(s) :departments are public and must be assigned to at least one priority.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    "custom" => array(
        "roles.*" => array(
            "exists" => "The selected role is invalid.",
        ),
        "category.*.type" => array(
            "required" => "One or more self-service types must be selected.",
        ),
        "category.*.categories" => array(
            "required" => "One or more categories are required when a self-service type has been selected.",
            "exists"   => "One or more of the selected categories is invalid.",
        ),
        "brand.*" => array(
            "exists" => "The selected brand is invalid.",
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as Email Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    "attributes" => array(),

);
