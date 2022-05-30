# Yngling
> Русско - Английский словарь для запоминания слов

<p align="center">
<img src="https://thumbsnap.com/i/ncBQDaV3.jpg?0530">
</p>

          
## Функции 

- Загрузка файла словаря в систему
- Динамическое переключение слов
- Изменение направления перевода
- Управление словарями
- Управление личным аккаунтом
- Прикрепление картинки к слову

## Установка

- `composer create-project --prefer-dist nikolaevdev/yngling`
- Отредактируйте `.env` и задайте данные подключения к базе данных
- (При установке с помощью git clone или загрузки запустите "php artisan key:generate" и "php artisan jwt:secret")
- `php artisan migrate`
- `npm install`

## Использование

#### Development

```bash
npm run dev
```

#### Production

```bash
npm run build
```

## Changelog
Пожалуйста, ознакомьтесь с [CHANGELOG](CHANGELOG.md) для получения дополнительной информации о том, что изменилось в последнее время.


