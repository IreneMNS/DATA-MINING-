

# 📊 Analisis Konsumsi Energi Terbarukan Panel Surya untuk Pemanfaatan Listrik



---

## 📁 Struktur File
```
├── app.py                  # Source code utama API menggunakan FastAPI
├── best_rf_model.pkl        # Model Random Forest terbaik (pickle file)
├── best_xgb_model.pkl       # Model XGBoost terbaik (pickle file)
├── scaler.pkl               # Scaler untuk preprocessing data (pickle file)
├── requirements.txt         # Daftar dependencies untuk environment
```

---

## 💻 Teknologi yang Digunakan
- Google Colab
- FastAPI
- Scikit-learn
- XGBoost
- Random Forest Regression
- Pandas
- Numpy
- Pickle

---

## 🚀 Cara Menjalankan API

1. **Clone repository ini:**
   ```bash
   git clone https://github.com/IreneMNS/DATA-MINING-.git
   cd DATA-MINING-
   ```

2. **Buat dan aktifkan virtual environment (opsional tapi direkomendasikan):**
   ```bash
   python -m venv env
   source env/bin/activate  
   env\Scripts\activate     
   ```

3. **Install dependencies:**
   ```bash
   pip install -r requirements.txt
   ```

4. **Jalankan aplikasi FastAPI:**
   ```bash
   uvicorn app:app --reload
   ```

5. **Akses API di browser:**
   - http://127.0.0.1:8000/docs

---

## 📚 Source Code (app.py) — Import Library
```python
from fastapi import FastAPI
from pydantic import BaseModel
import pickle
import pandas as pd
import numpy as np
```
## 📚 Source Code (app.py) — Input Data
app = FastAPI()

class ColumnInput(BaseModel):
    GHI: float
    temp: float
    pressure: float
    humidity: float
    wind_speed: float
    clouds_all: float
    isSun: int
    hour: int
    month: int

# Load pre-trained model
with open("best_rf_model.pkl", "rb") as f:
    best_rf_model = pickle.load(f)

# Load scaler
with open("scaler.pkl", "rb") as f:
    scaler = pickle.load(f)

@app.post("/predict")
def predict(input_data: ColumnInput):
    input_values = np.array([
        input_data.GHI, 
        input_data.temp, 
        input_data.pressure, 
        input_data.humidity, 
        input_data.wind_speed, 
        input_data.clouds_all, 
        input_data.isSun, 
        input_data.hour, 
        input_data.month
    ]).reshape(1, -1)

    # Scale the input
    scaled_input = scaler.transform(input_values)
    
    # Predict using RandomForest model
    rf_prediction = best_rf_model.predict(scaled_input)[0]
    
    return {"RandomForestPrediction": rf_prediction}


