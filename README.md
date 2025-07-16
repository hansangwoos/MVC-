# MVC 구조 이해하기

PHP에서 MVC(Model -View - Controller) 구조를 직접 구현하며 학습하는 프로젝트입니다.

## 프로젝트 구조
public/ # 진입점(index.php)
app/
├── Controller/ # 컨트롤러
├── Model/ # 모델 (곧 추가)
└── View/ # 뷰 (곧 추가)
core/
└── Router.php # 라우터 클래스


## 실행 방법
```bash
cd public
php -S localhost:8000
