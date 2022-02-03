<?php


namespace App\Traits;

use VideoThumbnail;

trait GenericClassWithMedia
{
    public function get_folder_images()
    {
        $folder = '';
        if (isset($this->folder_images)) $folder = @$this->folder_images;
        return $folder;
    }

    public function get_folder_videos()
    {
        $folder = '';
        if (isset($this->folder_videos)) $folder = $this->folder_videos;
        return $folder;
    }

    public function get_folder_pdf()
    {
        $folder = '';
        if (isset($this->folder_pdf)) $folder = $this->folder_pdf;
        return $folder;
    }

    public function get_images_attr($entrada)
    {
        $attr = [];
        switch ($entrada) {
            case 'images_create_cms':
                if (isset($this->images_create_cms)) $attr = @$this->images_create_cms;
                break;
            case 'Cheque_Físico':
                if (isset($this->Cheque_Físico)) $attr = @$this->Cheque_Físico;
                break;
            case 'Factura_Electrónica':
                if (isset($this->factura_electronica)) $attr = @$this->factura_electronica;
                break;
            default:
                if (isset($this->images_attr)) $attr = @$this->images_attr;
                break;
        }
        return $attr;
    }
    public function get_images_profile()
    {
        $attr = [];
        if (isset($this->images_profile)) $attr = @$this->images_profile;
        return $attr;
    }

    public function get_videos_attr()
    {
        $attr = [];
        if (isset($this->videos_attr)) $attr = @$this->videos_attr;
        return $attr;
    }

    public function get_pdf_attr($entrada)
    {
        $attr = [];
        switch ($entrada) {
            case 'Cheque_Físico':
                if (isset($this->Cheque_Físico_pdf)) $attr = @$this->Cheque_Físico_pdf;
                break;
            default:
                if (isset($this->pdf_attr)) $attr = @$this->pdf_attr;
                break;
        }
        return $attr;
    }

    public static function createDataWithMedia($fields = null, $elementFile = 'default')
    {
        $model = new self();
        $fields = (isset($fields)) ? $fields : request()->except('_token');
        if (isset(request()->files) && count(request()->files) > 0) {
            if ($model->get_images_attr($elementFile) != []) {
                $folder = $model->get_folder_images();
                foreach ($model->get_images_attr($elementFile) as $image) {
                    if ($_FILES[$image] && $_FILES[$image]['name'] != '') {
                        $names = saveImage(request()[$image], $folder);
                        foreach ($names as $x) {
                            $fields[$image] = $x;
                        }
                    } else {
                        $fields[$image] = '';
                    }
                }
                // $model = self::create ($fields);
                // return $model;
            }
            if ($model->get_videos_attr() != []) {
                var_dump("video");
                $folder_videos = $model->get_folder_videos();
                foreach ($model->get_videos_attr() as $video) {
                    if ($_FILES[$video] && $_FILES[$video]['name'] != '') {
                        $fields[$video] = saveVideo(request()[$video], $folder_videos);
                        $thumbnail = VideoThumbnail::createThumbnail(request()[$video]->getPathName(), public_path("videos/video_thumbnail"), $fields[$video] . '.jpg', 2, 600, 600);
                        $fields['image_video'] = $fields[$video] . '.jpg';
                    } else {
                        $fields[$video] = '';
                    }
                }
                // return $model = self::create ($fields);
            }
            if ($model->get_pdf_attr($elementFile) != []) {
                $folder_pdf = $model->get_folder_pdf();
                foreach ($model->get_pdf_attr($elementFile) as $pdf) {
                    if ($_FILES[$pdf] && $_FILES[$pdf]['name'] != '') {
                        $fields[$pdf] = savePdf(request()[$pdf], $folder_pdf);
                    } else {
                        $fields[$pdf] = '';
                    }
                }
                return $model = self::create($fields);
            }
            return $model = self::create($fields);
        } else {

            return $model = self::create($fields);
        }
    }
    public static function updateDataProfileUser($id, $fields = null)
    {
        $model = self::find($id);
        if (isset($fields['name'])) {
            $model->name = $fields['name'];
            $model->save();
        }

        $fields = (isset($fields)) ? $fields : request()->except('_token');

        if (isset(request()->files) && count(request()->files) > 0) {
            if ($model->get_images_profile() != []) {
                $folder = $model->get_folder_images();
                foreach ($model->get_images_profile() as $image) {
                    if ($_FILES[$image] && $_FILES[$image]['name'] != '') {

                        deleteImage($model[$image], $folder);

                        $names = saveImage(request()[$image], $folder);

                        foreach ($names as $x) {

                            $fields[$image] = $x;
                            return $model->update($fields);
                        }
                    } else {
                        $fields[$image] = $model[$image];
                    }
                }
            }
        } else {
            return $model->update($fields);
        }
    }

    public static function updateDataWithMedia($id, $fields = null, $elementFile = 'default')
    {
        $model = self::find($id);
        if (isset($fields['name'])) {
            $model->name = $fields['name'];
            $model->save();
        }

        $fields = (isset($fields)) ? $fields : request()->except('_token');

        if (isset(request()->files) && count(request()->files) > 0) {
            if ($model->get_images_attr($elementFile) != []) {
                $folder = $model->get_folder_images();
                foreach ($model->get_images_attr($elementFile) as $image) {
                    if ($_FILES[$image] && $_FILES[$image]['name'] != '') {

                        deleteImage($model[$image], $folder);

                        $names = saveImage(request()[$image], $folder);

                        foreach ($names as $x) {

                            $fields[$image] = $x;
                            return $model->update($fields);
                        }
                    } else {
                        $fields[$image] = $model[$image];
                    }
                }
            }

            if ($model->get_videos_attr() != []) {
                $folder_videos = $model->get_folder_videos();
                foreach ($model->get_videos_attr() as $video) {
                    if ($_FILES[$video] && $_FILES[$video]['name'] != '') {
                        deleteVideo($model[$video], $folder_videos);
                        $fields[$video] = saveVideo(request()[$video], $folder_videos);
                    } else {
                        $fields[$video] = $model[$video];
                    }
                }
                return $model->update($fields);
            }
            if ($model->get_pdf_attr($elementFile) != []) {
                $folder_pdf = $model->get_folder_pdf();
                foreach ($model->get_pdf_attr($elementFile) as $pdf) {
                    if ($_FILES[$pdf] && $_FILES[$pdf]['name'] != '') {
                        deletePdf($model[$pdf], $folder_pdf);
                        $fields[$pdf] = savePdf(request()[$pdf], $folder_pdf);
                    } else {
                        $fields[$pdf] = $model[$pdf];
                    }
                }
                return $model->update($fields);
            }
        } else {
            return $model->update($fields);
        }
    }

    public function deleteMedia($elementFile = 'default')
    {

        if ($this->get_folder_images() != '') {
            $folder = $this->get_folder_images();
            foreach ($this->get_images_attr($elementFile) as $image) {
                deleteImage($this[$image], $folder);
            }
        }

        if ($this->get_folder_videos() != '') {
            $folder_videos = $this->get_folder_videos();
            foreach ($this->get_videos_attr() as $video) {
                deleteVideo($this[$video], $folder_videos);
            }
        }

        if ($this->get_folder_pdf() != '') {
            $folder_pdf = $this->get_folder_pdf();
            foreach ($this->get_pdf_attr($elementFile) as $pdf) {
                deletePdf($this[$pdf], $folder_pdf);
            }
        }
    }
}
