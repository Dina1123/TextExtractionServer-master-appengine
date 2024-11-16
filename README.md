**Extract Backend Server**
This repository contains the backend server for an Image-to-Text Application that integrates with Google Cloud services. The server is deployed on Google App Engine and provides endpoints to handle image uploads, text extraction, and image management via RESTful APIs.

Features
- Image Upload: Save images to a Cloud Storage bucket (uploads folder).
- Image Listing: Retrieve a list of uploaded images.
- Image Deletion: Delete specific images from the Cloud Storage bucket.
- Text Extraction: Extract text from uploaded images using Google Machine Learning Kit (handled by the Flutter frontend).


Technologies Used:
- Backend: PHP
- Platform: Google App Engine (Flexible Environment)
- Storage: Google Cloud Storage
- Authentication: Service Accounts with appropriate permissions
- APIs: RESTful endpoints for GET, POST, and DELETE operations


Endpoints:
/get.php	GET	Retrieve a list of uploaded images.
/post.php	POST	Upload an image to Cloud Storage.
/delete.php	DELETE	Delete a specific image by filename.



Deployment Process
Setup Google Cloud Project:

Create a new project in Google Cloud.
Enable Cloud Storage and App Engine APIs.
Configure Bucket:

A default bucket is created during deployment.
Inside the bucket, create an uploads folder to store images.
Set Permissions:

Grant the default App Engine service account the Storage Admin role for the bucket.
Local Testing:

Download a service account key (.json file).
Set the GOOGLE_APPLICATION_CREDENTIALS environment variable to the key's path for local testing.


Deploy to App Engine:
Use the command:
gcloud app deploy  


Access the App:
Access the deployed application at your App Engine URL.
File Structure:


├── app.yaml          # Configuration for Google App Engine  
├── index.php         # Main entry point for the application  
├── get.php           # Handles GET requests to list images  
├── post.php          # Handles POST requests for image uploads  
├── delete.php        # Handles DELETE requests to remove images 
