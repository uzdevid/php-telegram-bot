# Static Analysis

## English

This project includes comprehensive static analysis tools to maintain code quality and consistency.

### Available Tools

#### 1. PHP_CodeSniffer (phpcs)
Checks code against PSR-12 standard and custom rules.

```bash
composer phpcs
```

**Configuration**: `phpcs.json`

#### 2. PHPStan
Type checker at level 8 (strictest).

```bash
composer phpstan
```

**Configuration**: `phpstan.neon`

#### 3. PHP-CS-Fixer
Automatically fixes code style issues.

```bash
# Dry-run (show changes)
composer lint

# Apply fixes
composer lint:fix
```

**Configuration**: `.php-cs-fixer.php`

### Running All Checks

```bash
composer static-analysis
```

This runs all three tools in sequence.

### CI/CD Integration

GitHub Actions automatically runs static analysis on:
- Push to `main` or `develop` branches
- Pull requests to `main` or `develop` branches

See `.github/workflows/static-analysis.yml` for details.

---

## O'zbekcha

Bu loyiha kod sifatini saqlash va mos kelishni ta'minlash uchun o'n keng statik tahlil vositalarini o'z ichiga oladi.

### Mavjud vositalar

#### 1. PHP_CodeSniffer (phpcs)
Kodni PSR-12 standartiga va shaxsiy qoidalarga tekshiradi.

```bash
composer phpcs
```

**Konfiguratsiya**: `phpcs.json`

#### 2. PHPStan
8-darajali tur tekshirgich (eng qat'iy).

```bash
composer phpstan
```

**Konfiguratsiya**: `phpstan.neon`

#### 3. PHP-CS-Fixer
Kod uslubi muammolarini avtomatik ravishda tuzatadi.

```bash
# Quruq ishga tushirish (o'zgarishlarni ko'rsatish)
composer lint

# Tuzatishlarni qo'llash
composer lint:fix
```

**Konfiguratsiya**: `.php-cs-fixer.php`

### Barcha tekshiruvlarni o'tkazish

```bash
composer static-analysis
```

Bu ketma-ketlikda barcha uchta vositani ishga tushiradi.

### CI/CD integratsiyasi

GitHub Actions quyidagi holatda statik tahlilni avtomatik ravishda ishga tushiradi:
- `main` yoki `develop` shoxlariga push
- `main` yoki `develop` shoxlariga pull request

Batafsil ma'lumot: `.github/workflows/static-analysis.yml`

---

## Русский

Этот проект включает комплексные инструменты статического анализа для поддержания качества и согласованности кода.

### Доступные инструменты

#### 1. PHP_CodeSniffer (phpcs)
Проверяет код в соответствии со стандартом PSR-12 и пользовательскими правилами.

```bash
composer phpcs
```

**Конфигурация**: `phpcs.json`

#### 2. PHPStan
Проверка типов на уровне 8 (самый строгий).

```bash
composer phpstan
```

**Конфигурация**: `phpstan.neon`

#### 3. PHP-CS-Fixer
Автоматически исправляет проблемы со стилем кода.

```bash
# Сухой прогон (показать изменения)
composer lint

# Применить исправления
composer lint:fix
```

**Конфигурация**: `.php-cs-fixer.php`

### Запуск всех проверок

```bash
composer static-analysis
```

Это запускает все три инструмента последовательно.

### Интеграция CI/CD

GitHub Actions автоматически запускает статический анализ при:
- Push в ветки `main` или `develop`
- Pull requests в ветки `main` или `develop`

Подробнее: `.github/workflows/static-analysis.yml`
